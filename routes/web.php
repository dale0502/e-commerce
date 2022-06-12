<?php

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


Route::get('/', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show')->name('show');
Route::get('/cart', 'ProductController@cart')->name('cart');

//admin
Route::get('/admin', 'Admin\ProductController@index')->name('admin.index');
Route::get('/admin/create', 'Admin\ProductController@create')->name('create');
Route::post('/admin', 'Admin\ProductController@store')->name('store');
Route::get('/admin/edit/{id}', 'Admin\ProductController@edit')->name('edit');
Route::put('/admin', 'Admin\ProductController@update')->name('update');