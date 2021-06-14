<?php

use App\Http\Controllers\AdminController;
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

//Page
Route::get('/detail',[ProductController::class,'getDetail'])->name('product.detail');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
