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
Route::get('category/create','Admin\CategoryController@createCategory')->name('category.create');
Route::post('category/save','Admin\CategoryController@saveCate')->name('category.save');
Route::get('category/update/{id}','Admin\CategoryController@updateCategory')->name('category.update');
Route::get('category/status/{id}','Admin\CategoryController@statusCategory')->name('category.status');
Route::get('category/delete/{id}','Admin\CategoryController@deleteCategory')->name('category.delete');
/*End Category Route*/


/*Begin Menh Route*/
Route::get('menh','Admin\MenhController@getList')->name('menh.list');
Route::get('menh/create','Admin\MenhController@createMenh')->name('menh.create');
Route::post('menh/save','Admin\MenhController@saveMenh')->name('menh.save');
Route::get('menh/update/{id}','Admin\MenhController@updateMenh')->name('menh.update');
Route::get('menh/status/{id}','Admin\MenhController@statusMenh')->name('menh.status');
Route::get('menh/delete/{id}','Admin\MenhController@deleteMenh')->name('menh.delete');
/*End Menh Route*/

 ?>