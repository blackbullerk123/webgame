<?php

use App\Http\Controllers\back\AdminController;
use App\Http\Controllers\back\BillController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\CheckoutController;
use App\Http\Controllers\back\SlideController;
use App\Http\Controllers\front\FrontendController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\front\LoginController;

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
    return redirect()->route('index');

});
Route::group(['middleware' => 'user'], function () {
    //Admin
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::get('/admin/profile{id}',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/admin/profile-transaction/{id}',[AdminController::class,'transaction'])->name('admin.profile.transaction');
    Route::post('/admin/profile/update/{id}',[AdminController::class,'update'])->name('admin.profile.update');
    Route::post('/admin/profile/updateinfo/{id}',[AdminController::class,'updateInfo'])->name('admin.profile.updateinfo');
    Route::post('/admin/profile-transaction/update/{id}',[AdminController::class,'updateTransaction'])->name('admin.profile.transaction.update');
    Route::post('/admin',[AdminController::class,'index'])->name('admin.search');
    //Product
    Route::get('/product',[ProductController::class,'index'])->name('product');
    Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product-create/save',[ProductController::class,'store'])->name('product.store');
    Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product-edit/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/product-delete',[ProductController::class,'delete'])->name('product.delete');
    Route::post('/product-edit/delete-package/{id}',[ProductController::class,'deletePackage'])->name('product.package.update');
    //Slide
    Route::get('/banner',[SlideController::class,'index'])->name('slide');
    Route::get('/banner-create',[SlideController::class,'create'])->name('slide.create');
    Route::post('/banner-create/save',[SlideController::class,'store'])->name('slide.store');
    Route::get('/banner-edit/{id}',[SlideController::class,'edit'])->name('slide.edit');
    Route::post('/banner-edit/update/{id}',[SlideController::class,'update'])->name('slide.update');
    Route::get('/banner-delete',[SlideController::class,'delete'])->name('slide.delete');
    //Bills
    Route::get('/bills',[BillController::class,'index'])->name('bills');
    Route::get('/game-bills-unpaid',[BillController::class,'billNew'])->name('bills.unpaid');
    Route::get('/point-bills-unpaid',[BillController::class,'billUnpaidPointPurchase'])->name('bills.unpaid.point');
    Route::post('/bills',[BillController::class,'index'])->name('bill.search');
    Route::get('/bills/purchase/{id}/status/{status}/point/{point}/user/{user}',[BillController::class,'purchaseBill'])->name('bill.purchase');
    Route::get('/point-purchase',[BillController::class,'indexPointPurchase'])->name('point');
    Route::post('/point-purchase',[BillController::class,'indexPointPurchase'])->name('point.search');
    Route::get('/point-purchase/purchase/{id}/status/{status}/point/{point}/userid/{user}/method/{method}',[BillController::class,'purchasePoint'])->name('point.purchase');
    //User
    Route::get('/users',[AdminController::class,'indexUser'])->name('users');
    Route::get('/users/banned/{id}',[AdminController::class,'banned'])->name('users.banned');
    Route::get('/users/unbanned/{id}',[AdminController::class,'unbanned'])->name('users.unbanned');
    Route::get('/users/edit/{id}',[AdminController::class,'editPoint'])->name('users.edit');
    Route::post('/users/update/{id}',[AdminController::class,'updatePoint'])->name('users.update');
    Route::get('/users/vip/{id}',[AdminController::class,'onVip'])->name('users.vip');
    Route::get('/users/unvip/{id}',[AdminController::class,'offVip'])->name('users.unvip');
    //Vip
    Route::get('/discount-vip',[AdminController::class,'indexVip'])->name('discountvip');
    Route::post('/update-vip/{id}',[AdminController::class,'updateVip'])->name('updatevip');
});


Route::group(['middleware' => 'login'], function () {
    //Page Customer 
    Route::get('/order',[UserController::class,'order'])->name('order');
    Route::get('/purchase-points',[UserController::class,'loadPoints'])->name('purchase_points');
    Route::post('/purchase-points/{id}/type/{type}',[UserController::class,'updatePoints'])->name('purchase_points.update');
    // Route::post('/withdraw-points/{id}',[UserController::class,'pointWithdraw'])->name('withdraw_points.update');
    Route::get('/transaction-history',[UserController::class,'transactionHistory'])->name('transaction_history');
    Route::get('/order-history',[UserController::class,'orderHistory'])->name('order_history');
    Route::get('/profile/{id}',[UserController::class,'profile'])->name('profile');
    Route::post('/profile/update/{id}',[UserController::class,'updateInfo'])->name('profile.update.info');
    Route::post('/profile/change/{id}',[UserController::class,'changePass'])->name('profile.change_pass');
});

Route::get('/bill-show/{id}',[BillController::class,'show'])->name('bill.show');
Route::get('/bills-show/{id}',[UserController::class,'WaitingBillShow'])->name('waiting.bill.show');

//Frontend Page
Route::get('/social-login/redirect/{provider}', [LoginController::class,'redirectToProvider'])->name('social.login');
Route::get('/social-login/{provider}/callback', [LoginController::class,'handleProviderCallback'])->name('social.callback');
//Home
Route::get('/',[FrontendController::class,'getIndex'])->name('index');
//All games
Route::get('/all-games',[FrontendController::class,'allGames'])->name('all_games');
//Type game
Route::get('/game-type/{type}',[FrontendController::class,'viewGameType'])->name('game.type.view');
//Document
Route::get('/document',[FrontendController::class,'document'])->name('document');
//Contact
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
//About
Route::get('/about',[FrontendController::class,'about'])->name('about');
//Service
Route::get('/service',[FrontendController::class,'service'])->name('service');
//Privacy
Route::get('/privacy',[FrontendController::class,'privacy'])->name('privacy');
//Search
Route::get('/search',[FrontendController::class,'search'])->name('search');
//Order
Route::get('/detail/{id}',[FrontendController::class,'getDetail'])->name('product.detail');
Route::get('/checkout/{id}/package/{package}',[FrontendController::class,'getCheckout'])->name('checkout.bill');

Route::post('/checkout/bill/{id}/package/{package}',[FrontendController::class,'getBill'])->name('checkout.bill_detail');
//Login
Route::post('/login',[FrontendController::class,'postLogin'])->name('login');
//SignUp
Route::post('/signup',[FrontendController::class,'postSignup'])->name('signup');
//Logout
Route::get('/logout',[FrontendController::class,'postLogout'])->name('logout');
//Forgot password
Route::get('/update-new-pass',[FrontendController::class,'updateNewPass'])->name('password.update');
Route::post('/forgot-password',[FrontendController::class,'recoveryPass'])->name('password.recovery');
Route::post('/reset-password',[FrontendController::class,'resetPass'])->name('password.reset');
