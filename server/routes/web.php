<?php

use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;


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
    
    return redirect()->route('login');
});

///Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\Backend','middleware'=>'checkValid'],function(){

    Route::resource('banner','BannerController');
    
    Route::resource('category','CategoryController');
    Route::resource('discountProduct','discountProductController');
    Route::resource('order','OrderController');
    Route::resource('orderItem','OrderItemController');
    Route::resource('product','ProductController');
    Route::resource('subcategory','SubCategoryController');
    Route::resource('user','UserController');
});

 // Route::get('/login',LoginController::class,'login')->name('login');
  Route::get('/login',[LoginController::class,'loginForm'])->name('login');
  Route::post('/login',[LoginController::class,'login']);
  Route::post('logout', [LoginController::class,'logout']);

