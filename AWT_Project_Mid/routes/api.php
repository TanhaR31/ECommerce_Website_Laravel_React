<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SellerProductAPIController;
use App\Http\Controllers\RegistrationAPIController;
use App\Http\Controllers\LoginAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//->middleware('APIAuth')
Route::post('/register',[RegistrationAPIController::class,'register']);
Route::post('/login',[LoginAPIController::class,'login']);
Route::post('/mail',[RegistrationAPIController::class,'mail']);
Route::post('/logout',[LoginAPIController::class,'logout']);

Route::get('/product/list',[SellerProductAPIController::class,'list']);
Route::post('/product/slist',[SellerProductAPIController::class,'slist']);
Route::post('/product/ulist',[SellerProductAPIController::class,'ulist']);
Route::post('/product/add',[SellerProductAPIController::class,'add']);
Route::get('/getProduct/{id}',[SellerProductAPIController::class,'getProduct']);
Route::post('/updateProduct',[SellerProductAPIController::class,'updateProduct']);
Route::post('/deleteProduct/{id}',[SellerProductAPIController::class,'deleteProduct']);
Route::post('/changeApprove/{id}',[SellerProductAPIController::class,'changeApprove']);


// Route::post("/user-signup",[UserAPIController::class,'userSignup']);

// Route::post("/user-login", [UserAPIController::class,'userLogin']);

// Route::get("/user/{email}", [UserAPIController::class,'userDetail']);
