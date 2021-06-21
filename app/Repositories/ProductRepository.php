<?php

namespace App\Repositories;

use App\Models\Operating;
use App\Models\Package;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProductRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getProducts()
    {
         return Product::orderBy('id', 'asc')->get();
    }

    public function getOSType()
    {
         return Operating::orderBy('id', 'asc')->get();
    }

    public function getProductById($id)
    {
         return Product::find($id);
    }

    public function getPackageByIdProduct($id_product)
    {
         return Package::where('product_id', $id_product)->first();
    }

    public function store($request)
    {
     $product = new Product();
     $package = new Package();
     $date = Carbon::now()->format('d-m-Y');
     $img = $request->avatar;
     if (isset($img)) {
         $img_name = 'upload/product/img/' . $date.'/'.Str::random(10).rand().'.'.$img->getClientOriginalExtension();
         $destinationPath = public_path('upload/product/img/' . $date);
         $img->move($destinationPath, $img_name);

         $product->image = $img_name;
     }  
     
     $product->name = $request->name;
     if (count($request->game_opt) > 1) {
          $product->os_supported = implode(',' ,$request->game_opt);
     }
     else{
          $product->os_supported = $request->game_opt[0];
     }
     
     $product->content_1 = $request->content;
     $product->save();
   
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

    public function update($request, $id)
    {
     $product = Product::find($id);
     $package = Package::where('product_id', $id)->first();
     if(!$package){
          $package = new Package();
          $package->product_id = $id;
     }
     $date = Carbon::now()->format('d-m-Y');
     $img = $request->avatar;
     if (isset($img)) {
         unlink(public_path($product->image));
         $img_name = 'upload/slide/banner/' . $date.'/'.Str::random(10).rand().'.'.$img->getClientOriginalExtension();
         $destinationPath = public_path('upload/slide/banner/' . $date);
         $img->move($destinationPath, $img_name);

         $product->image = $img_name;
     }
     
     $product->name = $request->name;
     if (count($request->game_opt) > 1) {
          $product->os_supported = implode(',' ,$request->game_opt);
     }
     else{
          $product->os_supported = $request->game_opt[0];
     }

     $product->content_1 = $request->content;
     $product->save();

     if ($request->package) {
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
     }
     
     $package->save();
    }

    public function AjaxDeletePackage($request, $id)
    {
          $package = Package::where('product_id', $id)->first();
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

          return response()->json([
               'error' => false,
               'package'  => $package,
           ], 200);
    }

    public function productdestroy($request)
    {
          $product = Product::find($request->id);
          $package = Package::where('product_id', $product->id)->first();
          if(!empty($product->image)){
               unlink(public_path($product->image));
          }         
          $product->delete();
          $package->delete();

    }

}