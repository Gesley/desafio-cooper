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

Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('products', 'ProductController');

Route::resource('orders', 'OrderController');

Route::resource('clients', 'ClientController');

Route::resource('clients', 'ClientController');