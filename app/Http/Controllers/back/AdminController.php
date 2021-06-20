<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
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
}
