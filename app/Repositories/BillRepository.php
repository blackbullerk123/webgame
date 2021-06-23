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
}