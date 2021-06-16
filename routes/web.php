<?php

use App\Http\Controllers\back\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout_index.index');
});

//Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::get('/product/edit',[ProductController::class,'edit'])->name('product.edit');

//Page
Route::get('/detail',[ProductController::class,'getDetail'])->name('product.detail');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
