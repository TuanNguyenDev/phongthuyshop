<?php 
Route::get('/dashboard', function(){
	return view('admin.dashboard');
})->name('dashboard');

Route::get('product', 'Admin\ProductController@getList')->name('product.list');



 ?>