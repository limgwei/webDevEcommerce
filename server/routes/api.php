<?php

use App\Http\Controllers\Api\DiscountProductApiController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\SubCategoryApiController;
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

    Route::apiResource('discount_product','DiscountProductApiController');
    Route::get('discount_product/sub/{id}',[DiscountProductApiController::class,'sub']);
    Route::get('discount_product/latest',[DiscountProductApiController::class,'product_latest']);
    Route::get('discount_product/name',[DiscountProductApiController::class,'order_by_name']);
    Route::get('discount_product/nameD',[DiscountProductApiController::class,'order_by_nameD']);
    Route::get('discount_product/price',[DiscountProductApiController::class,'order_by_price']);
    Route::get('discount_product/priceD',[DiscountProductApiController::class,'order_by_priceD']);
    Route::get('discount_product/sub/{id}/latest',[DiscountProductApiController::class,'sub_product_latest']);
    Route::get('discount_product/sub/{id}/name',[DiscountProductApiController::class,'sub_order_by_name']);
    Route::get('discount_product/sub/{id}/nameD',[DiscountProductApiController::class,'sub_order_by_nameD']);
    Route::get('discount_product/sub/{id}/price',[DiscountProductApiController::class,'sub_order_by_price']);
    Route::get('discount_product/sub/{id}/priceD',[DiscountProductApiController::class,'sub_order_by_priceD']);
    
    Route::apiResource('product','ProductApiController');
    Route::get('product/search/{name}',[ProductApiController::class,'serach_name']);
    Route::get('product/sub/{id}',[ProductApiController::class,'sub']);
    Route::get('product/latest',[ProductApiController::class,'product_latest']);
    Route::get('product/name',[ProductApiController::class,'order_by_name']);
    Route::get('product/nameD',[ProductApiController::class,'order_by_nameD']);
    Route::get('product/price',[ProductApiController::class,'order_by_price']);
    Route::get('product/priceD',[ProductApiController::class,'order_by_priceD']);
    Route::get('product/sub/{id}/latest',[ProductApiController::class,'sub_product_latest']);
    Route::get('product/sub/{id}/name',[ProductApiController::class,'sub_order_by_name']);
    Route::get('product/sub/{id}/nameD',[ProductApiController::class,'sub_order_by_nameD']);
    Route::get('product/sub/{id}/price',[ProductApiController::class,'sub_order_by_price']);
    Route::get('product/sub/{id}/priceD',[ProductApiController::class,'sub_order_by_priceD']);

    Route::apiResource('cart','CartApiController');

    Route::apiResource('admin','AdminApiController');

    Route::apiResource('banner','BannerApiController');

    Route::apiResource('category','CategoryApiController');

    Route::apiResource('chat','ChatApiController');

    Route::apiResource('order','OrderApiController');

    Route::apiResource('order_item','OrderItemApiController');

    Route::apiResource('promocode','PromocodeApiController');

    Route::apiResource('promocode_history','PromocodeHistoryApiController');

    Route::apiResource('sub_category','SubCategoryApiController');
    Route::get('subcategory/category/{id}',[SubCategoryApiController::class,'filter_by_category']);
    Route::get('subcategory/subcategory/{id}',[SubCategoryApiController::class,'filter_by_subcategory']);

    Route::apiResource('user','UserApiController');
 
 
});



