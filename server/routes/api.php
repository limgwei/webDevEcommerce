<?php

use App\Http\Controllers\Api\DiscountProductApiController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\SubCategoryApiController;
use App\Http\Controllers\Api\BannerApiController;
use App\Http\Controllers\Api\CartApiController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;   
use App\Http\Controllers\Api\ChatApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


// Authentication Routes...
  Route::post('/register', [RegisterController::class,'register']);
  Route::post('login', [LoginController::class,'login']);
  Route::post('logout', [LoginController::class,'logout']);
// Password Reset Routes...
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail']);
Route::post('password/reset', [ResetPasswordController::class,'reset']);
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm']);

//email verification
Route::get('/email/resend',[VerificationController::class,'resend'])->name('verification.resend');
Route::get('/email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');

//require user auth
//Route::apiResource('cart','App\Http\Controllers\Api\CartApiController',array("as" => "api"));    
//Route::apiResource('order','App\Http\Controllers\Api\OrderApiController',array("as" => "api"));
Route::apiResource('user','App\Http\Controllers\Api\UserApiController',array("as" => "api"));


Route::put('/user/image/{token}',[UserApiController::class,'updateImage']);
Route::put('/user/{token}',[UserApiController::class,'update']);
Route::get('/user/{id}',[UserApiController::class,'show']);


Route::get('/order/{token}',[OrderApiController::class,'index']);
Route::post('/order/{token}',[OrderApiController::class,'store']);
Route::put('/order/{id}',[OrderApiController::class,'update']);
Route::get('/order/{id}',[OrderApiController::class,'show']);
Route::post('order/orderItems/check',[OrderApiController::class,'getOrderItems']);

Route::get('/cart/{token}',[CartApiController::class,'index']);
Route::post('/cart/{token}',[CartApiController::class,'store']);
Route::put('/cart/{id}/{token}',[CartApiController::class,'update']);
Route::delete('/cart/{id}/{token}',[CartApiController::class,'delete']);

Route::get('/chat',[ChatApiController::class,'messages']);
Route::post('/chat',[ChatApiController::class,'newMessage']);

Route::post('user/avatar',[UserApiController::class,'updateImage']);



Route::apiResource('discount_product','App\Http\Controllers\Api\DiscountProductApiController');
Route::get('discount_product/sub/{id}',[DiscountProductApiController::class,'sub']);
Route::get('discount_product/latest',[DiscountProductApiController::class,'product_latest']);
Route::get('discount_product/name',[DiscountProductApiController::class,'order_by_name']);
Route::get('discount_product/nameD',[DiscountProductApiController::class,'order_by_nameD']);
Route::get('discount_product/price',[DiscountProductApiController::class,'order_by_price']);
Route::get('discount_product/priceD',[DiscountProductApiController::class,'order_by_priceD']);
// Route::get('discount_product/sub/{id}/latest',[DiscountProductApiController::class,'sub_product_latest']);
// Route::get('discount_product/sub/{id}/name',[DiscountProductApiController::class,'sub_order_by_name']);
// Route::get('discount_product/sub/{id}/nameD',[DiscountProductApiController::class,'sub_order_by_nameD']);
// Route::get('discount_product/sub/{id}/price',[DiscountProductApiController::class,'sub_order_by_price']);
// Route::get('discount_product/sub/{id}/priceD',[DiscountProductApiController::class,'sub_order_by_priceD']);


Route::apiResource('banner','App\Http\Controllers\Api\BannerApiController',array("as" => "api"));

Route::apiResource('category','App\Http\Controllers\Api\CategoryApiController',array("as" => "api"))         ;

Route::apiResource('sub_category','App\Http\Controllers\Api\SubCategoryApiController',array("as" => "api"));
Route::get('subcategory/category/{id}',[SubCategoryApiController::class,'filter_by_category']);
Route::get('subcategory/subcategory/{id}',[SubCategoryApiController::class,'filter_by_subcategory']);


Route::apiResource('product','App\Http\Controllers\Api\ProductApiController',array("as" => "api"));
    Route::get('product/search/{name}',[ProductApiController::class,'serach_name']);
    Route::get('product/sub/{id}',[ProductApiController::class,'sub']);
    Route::get('product/latest',[ProductApiController::class,'product_latest']);
    Route::get('product/name',[ProductApiController::class,'order_by_name']);
    Route::get('product/nameD',[ProductApiController::class,'order_by_nameD']);
    Route::get('product/price',[ProductApiController::class,'order_by_price']);
    Route::get('product/priceD',[ProductApiController::class,'order_by_priceD']);
    // Route::get('product/sub/{id}/latest',[ProductApiController::class,'sub_product_latest']);
    // Route::get('product/sub/{id}/name',[ProductApiController::class,'sub_order_by_name']);
    // Route::get('product/sub/{id}/nameD',[ProductApiController::class,'sub_order_by_nameD']);
    // Route::get('product/sub/{id}/price',[ProductApiController::class,'sub_order_by_price']);
    // Route::get('product/sub/{id}/priceD',[ProductApiController::class,'sub_order_by_priceD']);


