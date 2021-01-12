<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Backend\DiscountProductController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ChatController;


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
//     return view('auth.register');
    return redirect()->route('login');
 });

///Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\Backend','middleware'=>'checkValid'],function(){

    Route::resource('banner','BannerController'); //done
    
    Route::resource('category','CategoryController'); //done
    Route::resource('discountProduct','discountProductController');
    Route::resource('order','OrderController');
    Route::resource('product','ProductController');
    Route::resource('subcategory','SubCategoryController'); //done
    Route::resource('user','UserController'); //done
    Route::get('order/orderItems/{id}',[OrderController::class,'getOrderItems']);

    // Route::get('/chat/rooms',[ChatController::class,'rooms']);
     Route::get('/chat/{roomId}',[ChatController::class,'messages']);
    Route::post('/chat/{roomId}',[ChatController::class,'newMessage']);

    Route::get('/chat',[ChatController::class,'rooms']);
    
    Route::get('/banner/delete/{id}',[BannerController::class,'delete']);
    Route::get('/category/delete/{id}',[CategoryController::class,'delete']);
    Route::get('/discountProduct/delete/{id}',[DiscountProductController::class,'delete']);
    Route::get('/product/delete/{id}',[ProductController::class,'delete']);
    Route::get('/subcategory/delete/{id}',[SubCategoryController::class,'delete']);
    Route::get('/user/{id}/enable',[UserController::class,'enable']);
    Route::get('/user/{id}/disable',[UserController::class,'disable']);
});



 // Route::get('/login',LoginController::class,'login')->name('login');
  Route::get('/login',[LoginController::class,'loginForm'])->name('login');
  Route::post('/login',[LoginController::class,'login']);
  Route::post('logout', [LoginController::class,'logout']);

  Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm']);
  Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');