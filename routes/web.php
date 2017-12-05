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

Route::get('trangchu', 'PageController@trangchu')->name('trangchu');
Route::get('tim-kiem','PageController@search');
Route::get('sanpham/{id}', 'PageController@sanpham');
Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::get('product/{id}','PageController@product');
Route::get('details/{id}','PageController@details');
Route::get('cart','PageController@cart');
Route::get('remove/{rowId}','PageController@remove');
Route::get('checkout','PageController@checkView');
Route::post('checkout','PageController@checkOut');
Route::get('register','PageController@register');
Route::post('register','PageController@postRegister');
Route::get('login',['as'=>'login','uses'=>'PageController@login']);
Route::post('login',['as'=>'login','uses'=>'PageController@postLogin']);
Route::get('logout','PageController@logout');


################ PAGE - ADMIN ###########################################
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::get('admin/{id}','AdminController@admin');
	Route::get('list_admin','AdminController@listAdmin')->name('list_admin');
	Route::get('khachhang','AdminController@khachhang')->name('khachhang');
	Route::get('donhang',['as'=>'donhang','uses'=>'AdminController@donhang']);
	Route::get('sanpham',['as'=>'sanpham','uses'=>'AdminController@sanpham']);	
	Route::get('add',['as'=>'add','uses'=>'AdminController@getAddProduct']);	
	Route::post('add',['as'=>'add','uses'=>'AdminController@postAddProduct']);
	Route::get('bill_detail/{id}','AdminController@bill_detail');					
	Route::get('edit/{id}',['as'=>'edit','uses'=>'AdminController@getEditProduct']);
	Route::post('edit/{id}',['as'=>'edit','uses'=>'AdminController@postEditProduct']);
	Route::get('delete/{id}',['as'=>'delete()','uses'=>'AdminController@delProduct']);
});
	
Route::get('admin-login',['as'=>'admin-login','uses'=>'AdminController@getLogin']);   			
Route::post('admin-login',['as'=>'admin-login','uses'=>'AdminController@postLogin']);			
Route::get('admin-logout',['as'=>'admin-logout','uses'=>'AdminController@logout']); 			
	