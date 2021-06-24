<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
use App\Models\AdminTransaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('layout_admin.index');
    }

    public function profile($id)
    {
        $admin = User::find($id);
        return view('layout_admin.profile', compact('admin'));
    }

    public function updateInfo(Request $request, $id)
    {
        $admin = User::find($id);
        $date = Carbon::now()->format('d-m-Y');
        $img = $request->avatar;
        if (isset($img)) {
            if(isset($admin->avatar)) {
                unlink(public_path($admin->avatar));
            }         
            $img_name = 'upload/admin/img/' . $date . '/' . Str::random(10) . rand() . '.' . $img->getClientOriginalExtension();
            $destinationPath = public_path('upload/admin/img/' . $date);
            $img->move($destinationPath, $img_name);

            $admin->avatar = $img_name;
        }
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->save();
        return redirect()->back()->with('information', 'Cập nhật thành công');
    }

    public function update(ChangePassRequest $request, $id)
    {
        if (hash::check($request->password_old, Auth::user()->password)) {
            $admin = User::find($id);
            $admin->password = Hash::make($request->new_password);
            $admin->save();
            return redirect()->back()->with(['flag' => 'success', 'messege' => 'Đổi mật khẩu thành công']);
        }
        return redirect()->back()->with(['flag' => 'danger', 'messege' => 'Mật khẩu cũ không đúng']);
    }
    public function transaction($id)
    {
        $admin_transaction = AdminTransaction::where('transaction_type', 'momo,bank')->first();
        if ($admin_transaction->user_id == null) {
            $admin_transaction->user_id = $id;
            $admin_transaction->save();
        }
        $transaction = AdminTransaction::where('user_id', $id)->first();
        return view('layout_admin.admin_info', compact('transaction'));
    }

    public function updateTransaction(Request $request, $id)
    {
        $transaction_info = AdminTransaction::where('user_id', $id)->first();
        if (isset($request->momo)  && isset($request->bank)) {
            $transaction_info->transaction_info = $request->momo . ',' . $request->bank;
            $transaction_info->save();
        }
        return redirect()->back()->with(['flag' => 'success', 'messege' => 'Cập nhật thông tin thanh toán thành công']);
    }
}
