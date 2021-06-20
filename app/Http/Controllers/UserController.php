<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function order()
    {
        return view('layout_index.customer.order');
    }

    public function loadPoints()
    {
        return view('layout_index.customer.purchase_points');
    }

    public function transactionHistory()
    {
        return view('layout_index.customer.transaction_history');
    }

    public function orderHistory()
    {
        return view('layout_index.customer.order_history');
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('layout_index.customer.profile', compact('user'));
    }

    public function updateInfo(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
                'name' => 'required|max:255|regex:/(^[\pL0-9 ]+$)/u',
                'phone' => 'required|numeric',
            ],
            [
                //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                'avatar.mimes' => 'Only tag images with the extension .jpg .jpeg .png .gif are accepted',
                'avatar.max' => 'Capacity limit no more than 2M',
                'name.regex' => 'Names are not allowed to have special characters',
                'name.max' => 'No more than 255 characters',
                'phone.required' => 'Please enter the phone number',
                'phone.numeric' => 'Phone can only enter numbers',
            ]
        );
        $this->repository->updateInfo($request, $id);
        return redirect()->back()->with('information', 'Update successful');
    }

    public function changePass(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'new_password' => 'required|min:6|max:20',
                'confirm_password' => 'required|same:new_password',
            ],
            [
                'new_password.required' => 'Please enter a new password',              
                'new_password.min' => 'Password must be at least 6 characters',
                'new_password.max' => 'Password must not exceed 20 characters',
                'confirm_password.required' => 'Please enter the confirmation password',
                'confirm_password.same' => 'Confirm password is incorrect',
            ]
        );
        $this->repository->changePass($request, $id);
        return redirect()->back()->with('information', 'Update successful');
    }
}
