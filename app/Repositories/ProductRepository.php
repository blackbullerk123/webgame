<?php

namespace App\Repositories;

use App\Models\Package;
use App\Models\Product;

class ProductRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function store($request)
    {
        $image="";
       if($request->hasfile('avatar'))
       {
            $file = $request->file('avatar');
            $image = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images/product'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $image); //lưu hình ảnh vào thư mục public/image        
       }
       $product = new Product();

       $product->name = $request->name;
       if (count($request->game_opt) > 1) {
            $product->os_supported_id = implode(',' ,$request->game_opt);
       }
       else{
            $product->os_supported_id = $request->game_opt[0];
       }
       
       $product->content_1 = $request->content;
       $product->save();

       $package = new Package();
       $package->product_id = $product->id;
       if(count($request->package) > 1){
            $package->package_name = implode(',' ,$request->package);
            $package->package_price = implode(',' ,$request->value);
            $package->point_number = implode(',' ,$request->point);
       }
       else{
           $package->package_name = $request->package[0];
           $package->package_price = $request->value[0];
           $package->point_number = $request->point[0];
       }
       $package->save();
    }
}