<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Models\Operating;
use App\Models\Package;
use App\Models\Product;
use App\Models\ProductType;
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

    public function getType()
    {
         return Operating::all();
    }

    public function getTypeProduct()
    {
         return ProductType::all();
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
     $img_thumbnail = $request->thumbnail;
     if (isset($img_thumbnail)) {
         $img_name_thumbnail = 'upload/product/thumbnail/' . $date.'/'.Str::random(10).rand().'.'.$img_thumbnail->getClientOriginalExtension();
         $destinationPath = public_path('upload/product/thumbnail/' . $date);
         $img_thumbnail->move($destinationPath, $img_name_thumbnail);

         $product->thumbnail = $img_name_thumbnail;
     }    
     $product->short_des = $request->short_des;
     $product->name = $request->name;
     $product->product_type = $request->game_type;
     if (count($request->game_opt) > 1) {
          $product->os_supported = implode(',' ,$request->game_opt);
     }
     else{
          $product->os_supported = $request->game_opt[0];
     }
     
     $product->content_1 = $request->content;
     $product->save();
   
     $package->product_id = $product->id;   
     
          $package->package_name = json_encode($request->package);
          $package->package_price = json_encode($request->value);
          $package->point_number = json_encode($request->point);
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
         $img_name = 'upload/product/img/' . $date.'/'.Str::random(10).rand().'.'.$img->getClientOriginalExtension();
         $destinationPath = public_path('upload/product/img/' . $date);
         $img->move($destinationPath, $img_name);

         $product->image = $img_name;
     }

      $img_thumbnail = $request->thumbnail;
     if (isset($img_thumbnail)) {
         unlink(public_path($product->thumbnail));
         $img_name_thumbnail = 'upload/product/thumbnail/' . $date.'/'.Str::random(10).rand().'.'.$img_thumbnail->getClientOriginalExtension();
         $destinationPath = public_path('upload/product/thumbnail/' . $date);
         $img_thumbnail->move($destinationPath, $img_name_thumbnail);

         $product->thumbnail = $img_name_thumbnail;
     }    

     $product->short_des = $request->short_des;
     $product->name = $request->name;
     $product->product_type = $request->game_type;
     if (count($request->game_opt) > 1) {
          $product->os_supported = implode(',' ,$request->game_opt);
     }
     else{
          $product->os_supported = $request->game_opt[0];
     }

     $product->content_1 = $request->content;
     $product->save();

     if ($request->package) {
               $package->package_name = json_encode($request->package);
               $package->package_price = json_encode($request->value);
               $package->point_number = json_encode($request->point);       
     }
     
     $package->save();
    }

    public function AjaxDeletePackage($request, $id)
    {
          $package = Package::where('product_id', $id)->first();
               $package->package_name = json_encode($request->package);
               $package->package_price = json_encode($request->value);
               $package->point_number = json_encode($request->point);
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
          $bill = Bill::where('product_id', $request->id)->get();
          if(file_exists($product->image) && file_exists($product->thumbnail)){
               unlink(public_path($product->image));
               unlink(public_path($product->thumbnail));
          } 
          foreach ($bill as $b){
               $bill_to_delete = Bill::find($b->id);
               $bill_to_delete->delete();
          }      
          $product->delete();
          $package->delete();

         
          
          
    }

}