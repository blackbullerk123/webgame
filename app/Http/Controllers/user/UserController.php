<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\PointPurchase;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{    /**
    * Get member collection paginate.
    *
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function order()
    {
        $point_purchase_info = PointPurchase::where('user_id', Auth::user()->id)
                                            ->where('status', '0')
                                            ->paginate(4);
        return view('layout_index.customer.order', compact('point_purchase_info'));
    }

    public function loadPoints()
    {
        return view('layout_index.customer.purchase_points');
    }

    public function transactionHistory()
    {
        $point_purchase = PointPurchase::where('user_id',Auth::user()->id)->paginate(4);
        return view('layout_index.customer.transaction_history', compact('point_purchase'));
    }

    public function orderHistory()
    {
        $all_bill = Bill::where('user_id', Auth::user()->id)->paginate(4);
        return view('layout_index.customer.order_history', compact('all_bill'));
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
                'phone.numeric' => 'Phone only enter numbers',
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

    public function updatePoints(Request $request, $id, $type)
    {
        $point_purchase = PointPurchase::where('status', 0)->distinct()->count();
        if(Auth::user()->phone == null){
            return redirect()->back()->with('information', 'Please update your phone number');
        }elseif($point_purchase > 3){
            return redirect()->back()->with('information', 'Please pay the bill first');
        }
        else{
            $this->repository->pointPurchase($request, $id, $type);
            return redirect(route('order'));
        }    
    }

    // public function pointWithdraw(Request $request, $id)
    // {
    //     $this->validate(
    //         $request,
    //         [
    //             'amount' => 'required',
    //             'note' => 'required',
    //         ],
    //         [
    //             'amount.required' => 'Please enter the amount to withdraw',
    //             'note.required' => 'Please enter information',
    //         ]
    //     );
    //     $this->repository->pointWithdraw($request, $id);
    //     return response()->json([
    //         'success' => true
    //     ],200);
    // }

    public function WaitingBillShow($id)
    {
        $admin_trans = $this->repository->getAdminTrans();
        $admin = $this->repository->getAdminInfo();
        $user = $this->repository->getUserInfo($id);
        $point_purchase = $this->repository->getPointPurchase($id);
        return view('layout_index.customer.show_bill', compact('user', 'admin', 'id', 'point_purchase','admin_trans'));
    }
}
