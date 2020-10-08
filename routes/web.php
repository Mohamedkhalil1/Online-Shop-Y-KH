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

Route::get('/','ShopController@home')->name('home');

Route::get('/shop', 'ShopController@show')->name('shop.show');

Route::get('/shop/{id}', 'ShopController@showCategory')->name('category.show');

Route::get('/product/{id}', 'ShopController@showProduct')->name('product.details');


