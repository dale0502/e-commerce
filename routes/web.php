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


// Route::get('/', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show')->name('show');
Route::get('/cart', 'ProductController@cart')->name('cart');

//admin
Route::prefix('admin')->name('admin::')->group(function () {
    Route::get('/', 'Admin\ProductController@index')->name('index');
    Route::get('/create', 'Admin\ProductController@create')->name('create');
    Route::post('/', 'Admin\ProductController@store')->name('store');
    Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('edit');
    Route::put('/update', 'Admin\ProductController@update')->name('update');
    Route::get('/destroy/{id}', 'Admin\ProductController@destroy')->name('destroy');
});




// usage inside a laravel route
Route::get('/', function()
{
    $img = Image::make('https://images.pexels.com/photos/4273439/pexels-photo-4273439.jpeg')->resize(300, 200); // 這邊可以隨便用網路上的image取代
    return $img->response('jpg');
});