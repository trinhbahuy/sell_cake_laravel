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

Route::get('trangchu', 'PageController@trangchu');
Route::get('sanpham/{id}', 'PageController@sanpham');
Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::get('product/{id}','PageController@product');
Route::get('details/{id}','PageController@details');
Route::get('cart','PageController@cart');
Route::get('remove/{rowId}','PageController@remove');
