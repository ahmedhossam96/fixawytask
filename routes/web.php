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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', 'OrdersController@index');
Route::post('/orderdone', 'OrdersController@create');
Route::get('/pricing', 'PricingController@index');
Route::post('/pricingdone', 'PricingController@insert');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

