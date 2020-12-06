<?php

use App\Http\Controllers\CartController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Cart;

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
    $user = User::get()->where('id',2);
    return $user;
});

Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::resource('cart','CartController');
    Route::resource('category','CategoryController');
    Route::resource('chat','ChatController');
    Route::resource('discount-product','DiscountProductController');
    Route::resource('order','OrderController');
    Route::resource('order-item','OrderItemController');
    Route::resource('product','ProductController');
    Route::resource('promocode','PromocodeController');
    Route::resource('promocode-history','PromocodeHistoryController');
    Route::resource('sub-category','SubCategoryController');
    Route::resource('user','UserController');
});



