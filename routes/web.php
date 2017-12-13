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

Route::get('/','IndexController@getIndex')->name('index');


Route::get('/product/{id}','IndexController@getProductDetail')->name('product');

Route::get('/cart',function(){
	return view('user.cart_detail');
});

Route::get('/customer',function(){
	return view('user.customer');
});

Route::get('/login',function(){
	return view('user.login');
});

Route::get('register',function(){
	return view('user.register');
});

Route::get('/about_us',function(){
	return view('user.about_us');
});

Route::get('/news',function(){
	return view('user.news');
});

Route::get('/contact',function(){
	return view('user.contact');
});

Route::get('category/{id}', 'IndexController@getAllProduct')->name('category');
//gdyagshdas   