<?php 
use Illuminate\Http\Request;
Route::group(['middleware' => 'auth:admin'],function(){

	Route::get('/dashboard', function(){
		return view('admin.dashboard');
	})->name('dashboard');
	/*begin product route*/
	Route::get('product', 'Admin\ProductController@getList')->name('product.list');
	Route::get('product/create','Admin\ProductController@createProduct')->name('product.create');
	Route::post('product/save','Admin\ProductController@saveProduct')->name('product.save');
	Route::get('product/update/{id}','Admin\ProductController@updateProduct')->name('product.update');
	Route::get('product/status/{id}','Admin\ProductController@statusProduct')->name('product.status');

	/*End Product Route*/
	Route::group(['middleware' => 'check-mod'], function(){
		Route::get('product/delete/{id}','Admin\ProductController@deleteProduct')->name('product.delete');
		Route::get('category/delete/{id}','Admin\CategoryController@deleteCategory')->name('category.delete');
		Route::get('menh/delete/{id}','Admin\MenhController@deleteMenh')->name('menh.delete');
		Route::get('news/delete/{id}','Admin\TinTucController@deleteNew')->name('news.remove');

	});
	/*Begin Category Route*/
	Route::get('category','Admin\CategoryController@getList')->name('category.list');
	Route::get('category/create','Admin\CategoryController@createCategory')->name('category.create');
	Route::post('category/save','Admin\CategoryController@saveCate')->name('category.save');
	Route::get('category/update/{id}','Admin\CategoryController@updateCategory')->name('category.update');
	Route::get('category/status/{id}','Admin\CategoryController@statusCategory')->name('category.status');
	/*End Category Route*/


	/*Begin Menh Route*/
	Route::get('menh','Admin\MenhController@getList')->name('menh.list');
	Route::get('menh/create','Admin\MenhController@createMenh')->name('menh.create');
	Route::post('menh/save','Admin\MenhController@saveMenh')->name('menh.save');
	Route::get('menh/update/{id}','Admin\MenhController@updateMenh')->name('menh.update');
	Route::get('menh/status/{id}','Admin\MenhController@statusMenh')->name('menh.status');
	/*End Menh Route*/

	/*Admin Change Profile*/
	Route::get('profile','Admin\ProfileController@update')->name('profile.form');
	Route::post('profile','Admin\ProfileController@save');
	Route::get('change-pass','Admin\ProfileController@changePwdForm')->name('password.change');
	Route::post('change-pass','Admin\ProfileController@saveChangePwd');
	/*End Profile Route*/

	/*Tin tức Route*/
	Route::get('/news','Admin\TinTucController@getList')->name('tintuc.list');
	Route::get('news/create', 'Admin\TinTucController@createNew')->name('news.create');
	Route::post('news/save','Admin\TinTucController@saveNew')->name('news.save');
	Route::get('news/update/{id}','Admin\TinTucController@updateNew')->name('news.update');
	/*Emd Tin tức route*/

	/*Route quản lí User*/
	Route::get('/user','Admin\UserController@getList')->name('user.list');
	Route::get('/user/create','Admin\UserController@create')->name('user.create');
	Route::post('user/save','Admin\UserController@save')->name('user.save');
	/*End Route quản lí User*/
});


 ?>