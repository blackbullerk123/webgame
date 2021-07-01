<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
use App\Models\AdminTransaction;
use App\Models\Bill;
use App\Models\PointPurchase;
use App\Models\Product;
use App\Models\User;
use App\Models\Date;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $date_now = date('Y-m-d');
        if($request->dates == null)
        {
            $first_day = date('Y-m-01', strtotime($date_now));
            $last_day = date('Y-m-t', strtotime($date_now));
        }
        else
        {
            $first_day = date('Y-m-d', strtotime(str_replace('/', '-', explode(' - ', $request->dates)[0])));
            $last_day = date('Y-m-d', strtotime(str_replace('/', '-', explode(' - ', $request->dates)[1])));
        }
        $period = CarbonPeriod::create($first_day, $last_day);
        foreach($period as $date)
        {
            $dates[] = $date->format('Y-m-d');
        }
        $games = Product::where('product_type','=', 'Game')->orderBy('created_at', 'asc')->count();
        $user = User::where('role',0)->count();
        $bill_games = Bill::where('status',1)->count();
        $bill_point = PointPurchase::where('status',1)->count();
        $revenueMonthDone = PointPurchase::whereRaw('month(point_purchase.created_at) BETWEEN "'.date('m', strtotime($first_day)).'" AND "'.date('m', strtotime($last_day)).'"')
            ->select(DB::raw('sum(point_purchase.point_purchase) as totalMoney'), DB::raw('DATE(point_purchase.created_at) day'))
            ->where('point_purchase.status', 1)
            ->where('point_purchase.method','=','Purchase point')
            ->groupBy('day')
            ->get()
            ->toArray();
        $revenueMonthPending = PointPurchase::whereRaw('month(point_purchase.created_at) BETWEEN "'.date('m', strtotime($first_day)).'" AND "'.date('m', strtotime($last_day)).'"')
            ->select(DB::raw('sum(point_purchase.point_purchase) as totalMoney'), DB::raw('DATE(point_purchase.created_at) day'))
            ->where('point_purchase.status', 1)
            ->groupBy('day')
            ->get()
            ->toArray();

        $arrRevenueMonthDone = [];
        $arrRevenueMonthPending = [];
        foreach ($dates as $day) {
            $total = 0;
            foreach ($revenueMonthDone as $key => $revenue) {
                
                if ($revenue['day'] == $day) {
                    $total = $revenue['totalMoney'];
                    break;
                }
            }
            
            
            $arrRevenueMonthDone[] = (int) $total;
            $total = 0;
            foreach ($revenueMonthPending as $key => $revenue) {
                if ($revenue['day'] == $day) {
                    $total = $revenue['totalMoney'];
                    break;
                }
            }
            $arrRevenueMonthPending[] = (int) $total;
        }
        $totalRevenueFromToDate = array_sum($arrRevenueMonthDone);
        $viewData = [
            'games'                     => $games,
            'bill_games'                => $bill_games,
            'user'                      => $user,
            'bill_point'                => $bill_point,
            'first_day'                 => $first_day,
            'last_day'                  => $last_day,
            'dates'                     => $dates,
            'arrRevenueMonthDone'       => $arrRevenueMonthDone,
            'arrRevenueMonthPending'    => json_encode($arrRevenueMonthPending),
            'totalRevenueFromToDate'    => $totalRevenueFromToDate
        ];
        // dd(date('m', strtotime($first_day)));
        return view('layout_admin.index', $viewData);
        // return view('layout_admin.index', compact('games','user','bill_games','bill_point'));
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

    public function indexUser()
    {
        $users = User::where('role',0)
                    ->orderBy('created_at','desc')->get();
        return view('layout_admin.user.index', compact('users'));
    }

    public function banned($id)
    {
        $users = User::find($id);
        $users->banned_status = 1;
        $users->save();
        return redirect()->back()->with('information', 'Khóa user thành công');
    }

    public function unBanned($id)
    {
        $users = User::find($id);
        $users->banned_status = 0;
        $users->save();
        return redirect()->back()->with('information', 'Mở khóa user thành công');
    }

    public function editPoint($id)
    {
        $users = User::find($id);
        return view('layout_admin.user.edit', compact('users'));
    }

    public function updatePoint(Request $request, $id)
    {
        $users = User::find($id);
        if($request->point < $users->point){
            return redirect()->back()->with('error', '1');
        }else{ 
            $users->point = $request->point;
            $users->save();
            return redirect()->back()->with('information', 'Cập nhật point thành công');
        }      
    }
}
