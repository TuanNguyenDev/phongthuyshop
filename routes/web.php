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
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Models\Bill;
Route::get('/','IndexController@getIndex')->name('index');


// Route::get('/product/{id}','IndexController@getProductDetail')->name('product');
Route::group(['middleware' => 'auth'],function(){
	Route::get('/khuyenmai/chitiet/{id}','IndexController@getKhuyenMaiDetail')->name('khuyenmai.chitiet');
	Route::get('customer/profile/{id}','IndexController@getProfile')->name('customer.profile');
	Route::get('customer/change/profile/{id}','IndexController@changeProfile')->name('customer.change.profile');
	Route::get('customer/change/pass','IndexController@changePass')->name('customer.change.pass');
	Route::post('customer/change/pass','IndexController@savechangePass');

	Route::post('customer/save/profile','IndexController@saveProfile')->name('save.cus.profile');
	});

Route::get('/add_cart/{id}','IndexController@addCart')->name('addCart');

// Route::get('/add_carts/{id}/{quantity}','IndexController@addCarts')->name('addCarts');
Route::post('/add_carts','IndexController@addCarts')->name('addCarts');


// Route::post('updatecart','IndexController@updateCart')->name('updateCart');
Route::get('updatecart/{rowId}/{quantity}','IndexController@updateCart')->name('updateCart');

Route::get('/cart',function(){
	return view('user.cart_detail');
});

Route::get('/cart','IndexController@showCart')->name('showCart');
Route::get('/search/key/cate','IndexController@getSearchResult')->name('search_normal');

Route::get('/customer',function(){
	return view('user.customer');
});
Route::get('/tin_tuc_bo_ich', 'IndexController@getNew')->name('tin.tuc.bo.ich');
Route::get('/tin_tuc_chi_tiet/{id}','IndexController@chitietTin')->name('tintuc.chitiet');


Route::get('/khuyenmai','IndexController@getKhuyenMai')->name('khuyenmai');


Route::get('customer/bill/detail/{id}','IndexController@getBillDetail')->name('customer.bill.detail');
Route::post('/comment/product','IndexController@commentProduct')->name('comment.product');
Route::post('/comment/tintuc','IndexController@commentTinTuc')->name('comment.tintuc');
// Route::get('/login',function(){
// 	return view('user.login');
// });

// Route::get('register',function(){
// 	return view('user.register');
// });
// Route::get('login',function(){
// dd('login view');
// });
Route::get('/about_us',function(){
	return view('user.about_us');
});

Route::get('/news',function(){
	return view('user.news')->name('tintuc');
});

Route::get('/contact',function(){
	return view('user.contact');
})->name('contact.user');
Route::get('remove/{rowId}', 'IndexController@removeCart')->name('removeCart');

Route::get('category/{id}', 'IndexController@getAllProduct')->name('category');
Route::get('menh/{id}', 'IndexController@getProductByMenh')->name('menh');

Route::get('test', 'HomeController@index')->name('home');
Route::get('/checkout','IndexController@checkOut')->name('checkout');
Route::post('/checkout/complete','IndexController@checkoutComplete')->name('checkout.complete');

Route::post('/send/contact','IndexController@sendContact')->name('send.contact');
Route::get('testday', function(){
	$total = Cart::subtotal();
	$int = (float)$total;
	dd($int);

});
Route::get('/info/{id}','IndexController@infoCuaHang')->name('info');

//gdyagshdas   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::get('mod/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('mod/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin', 'AdminController@index')->name('admin');
Route::get('mod/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('send/{customer}/{bill}', function($customer, $bill){
	$cus = User::find($customer);
	$bills = Bill::find($bill);
	Mail::send('mail.cart', ['customer' => $cus, 'bill' => $bills], function($message) use ($cus){
		$message->to($cus->email, $cus->name)->subject('Thông báo đơn đặt hàng tại shop phongthuy');
	});
	return redirect(route('index'));
})->name('send.mail');
Route::post('mail/forget/password','IndexController@sendPass')->name('mail.pass.forget');

Route::get('/404/error',function(){
	return view('page.404');
})->name('404.error');

Route::get('/403/error',function(){
	return view('page.403');
})->name('403.error');

Route::get('back/return', function(){
	return redirect()->back();
})->name('back.url');
Route::get('/{slug}','IndexController@getProductDetail')->name('slug.url');