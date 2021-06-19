<?php

use App\Http\Controllers\back\AdminController;
use App\Http\Controllers\back\BillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\CheckoutController;
use App\Http\Controllers\back\SlideController;
use App\Http\Controllers\front\FrontendController;
use App\Http\Controllers\UserController;

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

Route::get('/',[FrontendController::class,'index'])->name('index');

//Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin');
//Product
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
Route::post('/product-create/save',[ProductController::class,'store'])->name('product.store');
Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product-edit/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::post('/product-edit/delete-package/{id}',[ProductController::class,'deletePackage'])->name('product.package.update');
//Bills
Route::get('/bills',[BillController::class,'index'])->name('bills');
Route::get('/bills-show',[BillController::class,'show'])->name('bills.show');
//Slide
Route::get('/banner',[SlideController::class,'index'])->name('slide');
Route::get('/banner-create',[SlideController::class,'create'])->name('slide.create');

//Frontend Page
//Page
//Contact
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
//About
Route::get('/about',[FrontendController::class,'about'])->name('about');
//Order
Route::get('/detail',[ProductController::class,'getDetail'])->name('product.detail');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
//Login
Route::post('/login',[FrontendController::class,'postLogin'])->name('login');
//SignUp
Route::post('/signup',[FrontendController::class,'postSignup'])->name('signup');
//Logout
Route::get('/logout',[FrontendController::class,'postLogout'])->name('logout');
//Page Customer
Route::get('/order',[UserController::class,'order'])->name('order');
Route::get('/purchase-points',[UserController::class,'loadPoints'])->name('purchase_points');
Route::get('/transaction-history',[UserController::class,'transactionHistory'])->name('transaction_history');
Route::get('/profile',[UserController::class,'profile'])->name('profile');

