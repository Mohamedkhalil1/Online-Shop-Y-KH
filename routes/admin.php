<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        
    Route::group(['namespace' =>'Admin','prefix' =>'admin'], function () {
        Route::get('/login','LoginController@getLogin')->name('get.admin.login');
        Route::post('/login','LoginController@Login')->name('admin.login');
        Route::get('/logout','LoginController@Logout')->name('admin.logout');
    });


    Route::group(['namespace' =>'Admin','middleware' => 'auth:admin','prefix' =>'admin'], function () {
            Route::get('/', 'DashboardController@index')->name('admin.dashboard');

            ## Categories Routes
            Route::group(['prefix' => 'categories'], function () {
                Route::get('/','CategoryController@index')->name('admin.categories');
                Route::get('create','CategoryController@create')->name('admin.categories.create');
                Route::post('store','CategoryController@store')->name('admin.categories.store');
                Route::get('edit/{id}','CategoryController@edit')->name('admin.categories.edit');
                Route::post('update/{id}','CategoryController@update')->name('admin.categories.update');
                Route::get('delete/{id}','CategoryController@destroy')->name('admin.categories.delete');
            });
            ## end Categories Routes 

               ## Categories Routes
               Route::group(['prefix' => 'products'], function () {
                Route::get('/','ProductController@index')->name('admin.products');
                Route::get('create','ProductController@create')->name('admin.products.create');
                Route::post('store','ProductController@store')->name('admin.products.store');
                Route::get('edit/{id}','ProductController@edit')->name('admin.products.edit');
                Route::post('update/{id}','ProductController@update')->name('admin.products.update');
                Route::get('delete/{id}','ProductController@destroy')->name('admin.products.delete');
            });
            ## end Categories Routes 

    

        });
       
        
   
        
});


