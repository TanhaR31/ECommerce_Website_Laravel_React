<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerAdminMsgController;
use App\Http\Controllers\SellerVoucherController;
use GuzzleHttp\Middleware;

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
    return redirect()->route('home');
});

//Home
Route::get('/home', [HomeController::class, 'index'])->name('home');



//New Seller Registration
Route::get('/sellerCreate', [RegistrationController::class, 'sellerCreate'])->name('sellerCreate');
Route::post('/sellerCreate', [RegistrationController::class, 'sellerCreateSubmitted'])->name('sellerCreate');

//Login & Logout
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Seller Dashboard
Route::get('/dashboard', [SellerController::class,'sellerDashboard'])->middleware('ValidSeller')->name('sellerDashboard');

//All Seller List
Route::get('/sellerList', [SellerController::class, 'sellerList'])->name('sellerList');

//Seller Info Edit
Route::get('/sellerEdit',[SellerController::class,'sellerEdit']);
Route::post('/sellerEdit',[SellerController::class,'sellerEditSubmitted'])->name('sellerEdit');

//Route::get('/product',[SellerProductController::class,'sellerProduct'])->name('sellerProduct');
//Seller Product List
Route::get('/product',[SellerController::class,'sellerProduct'])->name('sellerProduct');
Route::get('/aproduct',[SellerController::class,'sellerAProduct'])->name('sellerAProduct');
Route::get('/dproduct',[SellerController::class,'sellerDProduct'])->name('sellerDProduct');

//Seller Product Create
Route::get('/sellerProductCreate', [SellerProductController::class, 'sellerProductCreate'])->name('sellerProductCreate');
Route::post('/sellerProductCreate', [SellerProductController::class, 'sellerProductCreateSubmitted'])->name('sellerProductCreate');

//Seller Product Edit & Delete
Route::get('/sellerProductEdit/{id}/{name}',[SellerProductController::class,'sellerProductEdit']);
Route::post('/sellerProductEditSubmitted',[SellerProductController::class,'sellerProductEditSubmitted'])->name('sellerProductEdit');
Route::get('/sellerProductDelete/{id}/{name}',[SellerProductController::class,'sellerProductDelete']);

//Seller Admin Message
Route::get('/sellerAdminMsg',[SellerAdminMsgController::class,'sellerAdminMsg'])->name('sellerAdminMsg');

//Seller Order    
Route::get('/sellerOrders',[SellerController::class,'sellerOrders'])->name('sellerOrders');
Route::get('/sellerOrdersDeliveredPaid',[SellerController::class,'sellerOrdersDeliveredPaid'])->name('sellerOrdersDeliveredPaid');
Route::get('/sellerOrdersOrderedAdvanced',[SellerController::class,'sellerOrdersOrderedAdvanced'])->name('sellerOrdersOrderedAdvanced');
Route::get('/sellerOrdersOrderedNotPaid',[SellerController::class,'sellerOrdersOrderedNotPaid'])->name('sellerOrdersOrderedNotPaid');
Route::get('/sellerOrdersDeliveredError',[SellerController::class,'sellerOrdersDeliveredError'])->name('sellerOrdersDeliveredError');
Route::get('/sellerOrdersDeliveredReturned',[SellerController::class,'sellerOrdersDeliveredReturned'])->name('sellerOrdersDeliveredReturned');
Route::get('/sellerOrders/details/{id}',[SellerController::class,'sellerOrderDetails'])->name('sellerOrderDetails');

//Voucher
Route::get('sellerOrdersBadOrders',[SellerController::class,'sellerOrdersBadOrders'])->name('sellerOrdersBadOrders');
Route::get('/sellerVoucherCreate', [SellerVoucherController::class, 'sellerVoucherCreate'])->name('sellerVoucherCreate');
Route::post('/sellerVoucherCreate', [SellerVoucherController::class, 'sellerVoucherCreateSubmitted'])->name('sellerVoucherCreate');
Route::get('/sellerVoucherList', [SellerVoucherController::class, 'sellerVoucherList'])->name('sellerVoucherList');
Route::get('/sellerVoucherEdit/{id}',[SellerVoucherController::class,'sellerVoucherEdit']);
Route::post('/sellerVoucherEdit',[SellerVoucherController::class,'sellerVoucherEditSubmitted'])->name('sellerVoucherEdit');
Route::get('/sellerGiveVoucher/{id}', [SellerVoucherController::class, 'sellerGiveVoucher']);
Route::post('/sellerGiveVoucher', [SellerVoucherController::class, 'sellerGiveVoucherSubmitted'])->name('sellerGiveVoucher');