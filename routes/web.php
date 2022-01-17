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
Auth::routes();

Route::prefix('admin')->group(function () {

    //login system for Admin
    Route::get('/' , 'AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login' ,'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout' , 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/parking' , function(){
    return view ('parking');
});

Route::get('/customer' , function(){
    return view ('customer');
});

Route::get('/order' , function(){
    return view ('order');
});

Route::get('/book' , function(){
    return view ('book');
});