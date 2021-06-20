<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function getProductToIndex()
    {
        return Product::all();
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
    
}