<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([ 'prefix' => 'Admin','middleware'=>'guest:admin'], function(){

    Route::get('login','App\Http\Controllers\Dashboard\AdminController@login')->name('Admin.login');
    Route::post('PostAdminLogin','App\Http\Controllers\Dashboard\AdminController@postlogin')->name('PostAdminLogin');

});

Route::group([ 'middleware' => 'auth:admin', 'prefix' => 'Admin'], function(){

    Route::get('/','App\Http\Controllers\Dashboard\DashboardController@index')->name('dashboard');

});

