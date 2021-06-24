<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Models\PointPurchase;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BillRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getIndex($request)
    {   
         if ($request->all() == null) {
            $status = '0';
        }
        else
        {
            $status = $request->status;    
        }
        $date = date('Y-m-d');
        $all_bill = Bill::where('status',  $status)
                    ->when(($request->date == null), function ($query) use ($date){
                        $query->where(function ($q) use ($date){
                            $q->whereDate('created_at', '=', $date);
                        });
                    })
                    ->when(($request->date != null), function ($query) use ($request){
                        $query->where(function ($q) use ($request) {
                            $q->whereDate('created_at', date('Y-m-d', strtotime(str_replace('/', '-', $request->date))));
                        });
                    })       
                    ->get();
        return $all_bill;
    }

    public function getAdminInfo()
    {     
        $admin_info = User::where('role', '1')->first();
        
        return $admin_info;
    }

    public function getUserInfo($id)
    {     
        $user_id = Bill::where('id', $id)->value('user_id');
        $user_info = User::where('id', $user_id)->first();
        return $user_info;
    }

    public function getBill($id)
    {        
        $bill_info = Bill::Find($id);
        return $bill_info;
    }

    public function BillTransaction($id, $status)
    {
        $bill_perchase = Bill::find($id);
        if($status == '1')
        {
            $bill_perchase->status = $status;
            $bill_perchase->save();
        }
        elseif($status == '2'){
            $bill_perchase->status = '2';
            $bill_perchase->save();
        }
    }

    public function search()
    {
        
    }
}