<?php 
use Illuminate\Http\Request;
use App\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\CommentSanPham;
use App\Models\CommentTinTuc;
use App\Models\Bill;
Route::group(['middleware' => 'auth:admin'],function(){

	Route::get('/dashboard', function(){
		$countPro = Product::count();
		$countBill = Bill::count();
		$countCate = Category::count();
		$countCus = User::count();
		return view('admin.dashboard',compact('countPro','countBill','countCate','countCus'));
	})->name('dashboard');
	/*begin product route*/
	Route::get('product', 'Admin\ProductController@getList')->name('product.list');
	Route::get('product/create','Admin\ProductController@createProduct')->name('product.create');
	Route::post('product/save','Admin\ProductController@saveProduct')->name('product.save');
	Route::get('product/update/{id}','Admin\ProductController@updateProduct')->name('product.update');
	Route::get('product/status/{id}','Admin\ProductController@statusProduct')->name('product.status');
	Route::get('product/status/{id}/{name}','Admin\ProductController@statusProduct')->name('product.status');
	//abc dde
	//abc def
	/*End Product Route*/
	Route::group(['middleware' => 'check-mod'], function(){
		Route::get('product/delete/{id}','Admin\ProductController@deleteProduct')->name('product.delete');
		Route::get('category/delete/{id}','Admin\CategoryController@deleteCategory')->name('category.delete');
		Route::get('menh/delete/{id}','Admin\MenhController@deleteMenh')->name('menh.delete');
		Route::get('news/delete/{id}','Admin\TinTucController@deleteNew')->name('news.remove');
		Route::get('customer/delete/{id}','Admin\CustomerController@deleteCustomer')->name('customer.delete');
		Route::get('slide/delete/{id}','Admin\SlideController@delete')->name('slide.delete');
		Route::get('promotion/delete/{id}','Admin\PromotionController@delete')->name('promotion.delete');
			/*Route quản lí User*/
		Route::get('/user','Admin\UserController@getList')->name('user.list');
		Route::get('/user/create','Admin\UserController@create')->name('user.create');
		Route::post('user/save','Admin\UserController@save')->name('user.save');
		Route::get('user/delete/{id}','Admin\UserController@deleteUser')->name('user.delete');
		Route::get('user/status/{id}','Admin\UserController@statusUser')->name('user.status');
		Route::get('user/delete/{id}','Admin\UserController@deleteUser')->name('user.delete');
		/*End Route quản lí User*/
		/*Excel*/
		Route::get('/getImport', 'Admin\ExcelController@getImport')->name('importProduct');
		Route::get('/getExport', 'Admin\ExcelController@getExport')->name('exportProduct');
		Route::post('/getImport', 'Admin\ExcelController@postImport');
		/*End excel*/
		/*Begin doanh thu*/
		Route::get('/revenue','Admin\StatisticalController@getRevenue')->name('revenue.form');
		Route::get('top/product','Admin\StatisticalController@getTopProduct')->name('top.product');
		Route::post('/revenue/result/manual','Admin\StatisticalController@getResultManual')->name('revenue.manual');
		Route::post('/topproduct/result/manual','Admin\StatisticalController@getTopProductManual')->name('top.product.manual');
		/*End doanh thu*/
		//tuan test
<<<<<<< HEAD
		Route::get('def');
=======
		Route::get('/dfe');
>>>>>>> 5ce55f5080d467f6665dea80e704f0103dbe451b
		Route::get('/abc');

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

	

	/* Thông tin của cửa hàng*/
	Route::get('/info','Admin\InfoController@getList')->name('info.list');
	Route::get('/info/update/{id}','Admin\InfoController@updateInfo')->name('info.update');
	Route::post('/info/save','Admin\InfoController@saveInfo')->name('info.save');
	/*end thông tin cửa hàng*/

	/*route slide trang chủ*/
	Route::get('/slide','Admin\SlideController@getList')->name('slide.list');
	Route::get('/slide/create','Admin\SlideController@create')->name('slide.create');
	Route::post('slide/save','Admin\SlideController@save')->name('slide.save');
	Route::get('slide/update/{id}','Admin\SlideController@update')->name('slide.update');
	/*end slide trang chủ*/
	/*tạo mã khuyến mãi*/
	Route::get('/promotion/create','Admin\PromotionController@createPromotion')->name('promotion.create');
	Route::post('/promotion/save','Admin\PromotionController@savePromotion')->name('promotion.save');
	Route::get('/promotion','Admin\PromotionController@getList')->name('promotion.list');
	Route::get('promotion/status/{id}','Admin\PromotionController@statusPromotion')->name('promotion.status');
	/*end mã khuyến mãi*/
	/*begin phần đơn hàng*/
	Route::get('/bill/waitting','Admin\BillController@billWaitting')->name('bill.waitting');
	Route::get('/bill/moving','Admin\BillController@billMoving')->name('bill.moving');
	Route::get('/bill/accept/{id}','Admin\BillController@billAccept')->name('bill.accept');
	Route::get('/bill/cancel/{id}','Admin\BillController@billCancel')->name('bill.cancel');
	Route::get('/bill/complete/{id}','Admin\BillController@billComplete')->name('bill.complete');
	Route::get('/bill/detail/{id}/{rdr}','Admin\BillController@billDetail')->name('bill.detail');
	Route::get('/bill/success','Admin\BillController@billSuccess')->name('bill.success');
	Route::get('/bill/fail','Admin\BillController@billFail')->name('bill.fail');
	/*end phần đơn hàng*/
	/*Khách hàng*/
	Route::get('/customer/logged', 'Admin\CustomerController@getListLogged')->name('customer.logged');
	Route::get('/customer/nologin', 'Admin\CustomerController@getListNoLogin')->name('customer.nologin');
	Route::get('customer/status/{id}','Admin\CustomerController@statusCustomer')->name('customer.status');
	Route::get('customer/bill/{id}','Admin\CustomerController@customerBill')->name('customer.bill');
	Route::get('customer/bill/detail/{id}','Admin\CustomerController@billDetail')->name('customer.billdetail');
	Route::get('customer/noLogin/bill/detail/{id}','Admin\CustomerController@noLoginBillDetail')->name('customer.noLogin.billdetail');
	/*End Khách hàng*/
	
	/*Quản lý commemt */
	Route::get('comment/product/{id}','Admin\CommentProductController@getList')->name('product.comment');
	Route::get('comment/product/status/{id}','Admin\CommentProductController@changeStatus')->name('comment.product.status');
	Route::get('comment/delete/{id}','Admin\CommentProductController@deleteComment')->name('comment.delete');
	Route::get('comment/new/delete/{id}','Admin\CommentNewController@deleteComment')->name('comment.new.delete');
	Route::get('comment/new/status/{id}','Admin\CommentNewController@changeStatus')->name('comment.new.status');
	Route::get('comment/news/{id}','Admin\CommentNewController@getList')->name('news.comment');

	// Route::get('comment/product/all','Admin\CommentProductController@getAllList')->name('product.comment.all');
	Route::get('comment/sp',function(){
		$commentsp = CommentSanPham::paginate(20);
		return view('admin.comment.list_product', compact('commentsp'));
	})->name('product.comment.all');
	Route::get('comment/product/status/all/{id}','Admin\CommentProductController@changeStatusAll')->name('comment.product.status.all');
	Route::get('comment/delete/all/{id}','Admin\CommentProductController@deleteCommentAll')->name('comment.delete.all');
	// Route::get('comment/news/all','Admin\CommentNewController@getAllList')->name('new.comment.all');
	Route::get('comment/tt',function(){
		$commentnew = CommentTinTuc::paginate(20);
		return view('admin.comment.list_new', compact('commentnew'));
	})->name('new.comment.all');
	Route::get('comment/new/delete/all/{id}','Admin\CommentNewController@deleteCommentAll')->name('comment.new.delete.all');
	Route::get('comment/new/status/all/{id}','Admin\CommentNewController@changeStatusAll')->name('comment.new.status.all');
	/*end quản lý comment*/
	/*Begin Quản lý phản hồi*/
	Route::get('/feedback','Admin\FeedbackController@getList')->name('feedback.list');
	Route::get('feedback/delete/{id}','Admin\FeedbackController@deleteFeedback')->name('feedback.delete');
	Route::get('feedback/mail/{mail}/{name}', 'Admin\FeedbackController@returnFromMail')->name('feedback.mail');
	Route::get('feedback/sendmail', function(Request $rq){
		$name = $rq->name;
		$email = $rq->email;
		$noi_dung = $rq->noi_dung;
		Mail::send('mail.feedback',['name' => $name, 'email' => $email,'noi_dung'=> $noi_dung], function($message) use($email, $name) {
			$message->to($email,$name)->subject('Trả lời của shop về phản hồi của quý khách');
		});
		return redirect()->route('feedback.list');
	})->name('send.mail.feedback');
	/*End quản lý phản hồi*/
	
});
Route::get('/back/{rd}', function($rd){
	$url = "bill.".$rd;
	return redirect(route($url));
})->name('return.back');

 ?>
 