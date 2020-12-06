<?php

use App\Http\Controllers\CartController;
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
Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    
    Route::apiResource('cart','CartApiController');
    Route::apiResource('category','CategoryApiController');
    Route::apiResource('chat','ChatApiController');
    Route::apiResource('discount-product','DiscountProductApiController');
    Route::apiResource('order','OrderApiController');
    Route::apiResource('order-item','OrderItemApiController');
    Route::apiResource('product','ProductApiController');
    Route::apiResource('promocode','PromocodeApiController');
    Route::apiResource('promocode-history','PromocodeHistoryApiController');
    Route::apiResource('sub-category','SubCategoryApiController');
    Route::apiResource('user','UserApiController');
 
 
});



