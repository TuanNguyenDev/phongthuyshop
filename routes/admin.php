<?php 
use Illuminate\Http\Request;
Route::get('/dashboard', function(){
	return view('admin.dashboard');
})->name('dashboard');

Route::get('/generate-slug/{title}', function($title){
	dd(slug_generate($title));
})->name('slug.generate');
/*Begin Product route*/
Route::get('product', 'Admin\ProductController@getList')->name('product.list');

Route::get('product/create','Admin\ProductController@createProduct')->name('product.create');

Route::post('product/save','Admin\ProductController@saveProduct')->name('product.save');
Route::get('product/update/{id}','Admin\ProductController@updateProduct')->name('product.update');
Route::get('product/status/{id}','Admin\ProductController@statusProduct')->name('product.status');
Route::get('product/delete/{id}','Admin\ProductController@deleteProduct')->name('product.delete');

/*End Product Route*/

/*Begin Category Route*/
Route::get('category','Admin\CategoryController@getList')->name('category.list');
/*End Category Route*/
 ?>