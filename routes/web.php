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

Route::get('/add_cart/{id}','IndexController@addCart')->name('addCart');

Route::post('/updatecart','IndexController@updateCart')->name('updateCart');

Route::get('/cart',function(){
	return view('user.cart_detail');
});

Route::get('/cart','IndexController@showCart')->name('showCart');
Route::get('/search/key/cate','IndexController@getSearchResult')->name('search_normal');

Route::get('/customer',function(){
	return view('user.customer');
});

// Route::get('/login',function(){
// 	return view('user.login');
// });

// Route::get('register',function(){
// 	return view('user.register');
// });

Route::get('/about_us',function(){
	return view('user.about_us');
});

Route::get('/news',function(){
	return view('user.news')->name('tintuc');
});

Route::get('/contact',function(){
	return view('user.contact');
});
Route::get('remove/{rowId}', 'IndexController@removeCart')->name('removeCart');

Route::get('category/{id}', 'IndexController@getAllProduct')->name('category');

Route::get('test', 'HomeController@index')->name('home');
//gdyagshdas   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::get('mod/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('mod/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin', 'AdminController@index')->name('admin');
Route::get('mod/logout','Auth\AdminLoginController@logout')->name('admin.logout');