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
    public function getIndex($status)
    {     
        $all_bill = Bill::where('status', $status)->get();
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
}