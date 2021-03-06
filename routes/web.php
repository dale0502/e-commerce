<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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


Route::get('/', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show')->name('show');
Route::get('/cart', 'ProductController@cart')->name('cart');

//admin
Route::prefix('admin')->name('admin::')->group(function () {
    Route::get('/', 'Admin\ProductController@index')->name('dash-board');
    Route::get('/products-list', 'Admin\ProductController@getProductsList')->name('products-list');
    Route::get('/create', 'Admin\ProductController@create')->name('create');
    Route::post('/', 'Admin\ProductController@store')->name('store');
    Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('edit');
    Route::put('/update', 'Admin\ProductController@update')->name('update');
    Route::get('/destroy/{id}', 'Admin\ProductController@destroy')->name('destroy');

    //image
    Route::get('/upload-modal/{id}', 'Admin\ProductController@getUploadModal')->name('upload-modal');
    Route::post('/file-upload-batch/{id}', 'Admin\ProductController@storeImages')->name('upload-image');
});

// 會員註冊
Route::get('/register-form', 'AuthController@getRegisterForm')->name('register-form');
Route::get('/login-form', 'AuthController@getLoginForm')->name('login-form');
Route::post('/register', 'AuthController@register')->name('register');
Route::post('/login', 'AuthController@login')->name('login');