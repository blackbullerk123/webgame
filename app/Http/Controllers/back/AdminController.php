<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
use App\Models\AdminTransaction;
use App\Models\User;
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

    public function update(ChangePassRequest $request, $id) 
    {
        if(hash::check($request->password_old, Auth::user()->password)){
            $user = User::find($id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with(['flag'=>'success','messege'=>'Đổi mật khẩu thành công']);
        }   
        return redirect()->back()->with(['flag'=>'danger','messege'=>'Mật khẩu cũ không đúng']);
        
    }
    public function transaction($id)
    {
        $admin_transaction = AdminTransaction::where('transaction_type', 'momo,bank')->first();
        if($admin_transaction->user_id == null){
            $admin_transaction->user_id = $id;
            $admin_transaction->save();
        }
        $transaction = AdminTransaction::where('user_id', $id)->first();
        return view('layout_admin.admin_info', compact('transaction'));
    }

    public function updateTransaction(Request $request, $id)
    {
        $transaction_info = AdminTransaction::where('user_id', $id)->first();
        if(isset($request->momo)  && isset($request->bank)){
            $transaction_info->transaction_info = $request->momo.','.$request->bank;
            $transaction_info->save();
        }
        return redirect()->back()->with(['flag'=>'success','messege'=>'Cập nhật thông tin thanh toán thành công']);
    }
}
