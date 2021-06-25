<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Models\Product;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FrontendRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->save();
    }

    public function getView($type)
    {
        return Product::select('name','os_supported','content_1','image')
                        ->when(($type == 'Android'), function($query) use ($type)
                        {
                            $query->where(function ($q) use ($type)
                            {
                                $q->where('os_supported', $type);
                            });
                        });
    }

    public function getProductToIndex()
    {
        return Product::orderBy('created_at', 'desc')->paginate(8);
    }

    public function getSlides()
    {
        return Slide::orderBy('created_at', 'desc')->limit(10)->get();
    }

    public function getDetailToProduct($id)
    {
        
        $product = Product::select('package.product_id', 'package.package_name', 'package.package_price', 'package.point_number', 'name', 'os_supported', 'content_1', 'image')
                            ->join('package', 'products.id', '=', 'package.product_id')
                            ->where('package.product_id', $id)
                            ->where('products.id', $id)
                            ->first();
        return $product;
    }

    public function getPackageToCheckout($id)
    {
        $product = Product::select('package.product_id', 'package.package_name', 'package.package_price', 'package.point_number', 'name', 'os_supported', 'image')
                            ->join('package', 'products.id', '=', 'package.product_id')
                            ->where('package.product_id', $id)
                            ->where('products.id', $id)
                            ->first();
        return $product;
    }

    public function getPackageSelectedToCheckout($product, $package)
    {
        $package_selected = array(explode(',', $product->package_name)[$package], explode(',', $product->package_price)[$package], explode(',', $product->point_number)[$package]);
        return $package_selected;
    }

    public function createBill($request, $product_info, $package_selected)
    {
        $bill = new Bill();
        $point_user = User::find(Auth::user()->id);

        $bill->product_id = $product_info->product_id;
        $bill->user_id = Auth::user()->id;
        $bill->description = $package_selected[0];
        $bill->order_id = $package_selected[2] * $request->number.''.Str::random(4);
        $bill->product_total = $request->number;
        $bill->point_total = $package_selected[2] * $request->number;
        $bill->save();

        $point_user->point = $point_user->point - $bill->point_total;
        $point_user->save();     
    }
    
    public function search($request)
    {
        $product = Product::where('name', 'like', '%' . $request->search . '%')
            ->paginate(20);
        return $product;
    }
}