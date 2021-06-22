<?php

namespace App\Repositories;

use App\Models\PointPurchase;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function updateInfo($request, $id)
    {
        $user = User::find($id);
        $date = Carbon::now()->format('d-m-Y');
        $img = $request->avatar;
        if (isset($img)) {
            // unlink(public_path($user->avatar));
            $img_name = 'upload/user/img/' . $date.'/'.Str::random(10).rand().'.'.$img->getClientOriginalExtension();
            $destinationPath = public_path('upload/user/img/' . $date);
            $img->move($destinationPath, $img_name);
   
            $user->avatar = $img_name;
        } 
        
        $user->name = $request->name;
        $user->phone = $request->phone;       
        $user->save();
    }

    public function changePass($request, $id) 
    {
        $user = User::find($id);
        $user->password = Hash::make($request->new_password);
        $user->save();       
    }
    
    public function pointPurchase($request, $id, $type)
    {
        $point_purchase = new PointPurchase();

        $point_purchase->user_id = $id;
        $point_purchase->point_purchase = $request->amount_dep;
        $point_purchase->description = 'Nạp '.$request->amount_dep.' point '.$type;
        $point_purchase->order_id = $request->amount_dep.''.Str::random(4);
        $point_purchase->save();

    }
}