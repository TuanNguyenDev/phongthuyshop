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
    return view('layouts.users.main');
});

Route::get('/home',function(){
	return view('layouts.users.home.index');
});

Route::get('/product',function(){
	return view('layouts.users.product.product_detail');
});

Route::get('/cart',function(){
	return view('layouts.users.cart.cart_detail');
});

Route::get('/customer/account',function(){
	return view('layouts.users.customers.account');
});

Route::get('/customer/login',function(){
	return view('layouts.users.customers.login');
});

Route::get('/customer/register',function(){
	return view('layouts.users.customers.register');
});

Route::get('/about_us',function(){
	return view('layouts.users.more_infomation.policy');
});

Route::get('/knowledge',function(){
	return view('layouts.users.more_infomation.knowledge');
});

Route::get('/contact',function(){
	return view('layouts.users.more_infomation.contact');
});

Route::get('/collections',function(){
	return view('layouts.users.product.collections_products');
});
//gdyagshdas   