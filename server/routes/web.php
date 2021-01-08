<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ChatController;
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

    Route::resource('banner','BannerController');
    
    Route::resource('category','CategoryController');
    Route::resource('discountProduct','discountProductController');
    Route::resource('order','OrderController');
    Route::resource('product','ProductController');
    Route::resource('subcategory','SubCategoryController');
    Route::resource('user','UserController');
    Route::get('order/orderItems/{id}',[OrderController::class,'getOrderItems']);

    // Route::get('/chat/rooms',[ChatController::class,'rooms']);
     Route::get('/chat/{roomId}',[ChatController::class,'messages']);
    Route::post('/chat/{roomId}',[ChatController::class,'newMessage']);

    Route::get('/chat',[ChatController::class,'rooms']);
    

});



 // Route::get('/login',LoginController::class,'login')->name('login');
  Route::get('/login',[LoginController::class,'loginForm'])->name('login');
  Route::post('/login',[LoginController::class,'login']);
  Route::post('logout', [LoginController::class,'logout']);

