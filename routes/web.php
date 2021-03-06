<?php

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



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'AdminController@index')->name('home');

});

Route::group(['namespace' => 'Site'], function () {

    Route::get('/', 'SiteController@index')->name('site.index');

});


Auth::routes();

