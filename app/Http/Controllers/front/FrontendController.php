<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function postLogin(Request $request)
    {
        $credentaials = array('email' => $request->username, 'password' => $request->password);
        if (Auth::attempt($credentaials)) {
            return redirect()->back()->with(['flag' => 'success', 'messege' => 'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'messege' => 'Đăng nhập không thành công']);
        }
    }
}
