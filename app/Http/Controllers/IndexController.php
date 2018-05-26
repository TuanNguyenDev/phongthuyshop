<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckOutRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Menh;
use App\Models\TinTuc;
use App\Models\Bill;
use App\Models\Info;
use App\Models\BillDetail;
use App\Models\TrinhChieu;
use App\Models\KhuyenMai;
use App\Models\PhanHoi;
use App\Models\Slug;
use App\Models\Customer;
use App\Models\CommentSanPham;
use App\Models\CommentTinTuc;
use App\User;
use Illuminate\Http\Response;
use Auth;
use Log;
use DB;
use Hash;
use Cart;
use App\Http\Requests\SaveCustomerProfileRequest;
use App\Http\Requests\SaveChangePasswordRequest;
class IndexController extends Controller
{
	/*
	
	 */
    public function getIndex(){
    	$slide_first = TrinhChieu::first();
    	$slides = TrinhChieu::where('id','<>',$slide_first->id)->get();
    	$cates = Category::all();
        $new_pro = Product::where('trang_thai', 1)->orderBy('created_at','DESC')->take(6)->get();
        $random = Product::where('trang_thai', 1)->orderBy(DB::raw('RAND()'))->take(6)->get();
    	return view('user.index',compact('slides','slide_first','cates','new_pro','random'));
    }

    // public function getProductDetail($id){
    //     $product = Product::find($id);
    //     if(!isset($product)){
    //         return '403';
    //     }
    //     $same_pro = Product::where([
    //                                 ['trang_thai', '=', 1],
    //                                 ['id_danh_muc', '=', $product->id_danh_muc]
    //     ])->orderBy('created_at','DESC')->take(8)->get();
    //     $new_pro = Product::where('trang_thai', 1)->orderBy('created_at','DESC')->take(8)->get();
    //     $commentsp = CommentSanPham::where('id_san_pham',$id)->paginate(10);
    //     return view('user.product_detail', compact('product','commentsp','new_pro','same_pro'));
    // }
    public function getProductDetail($slug){
    	$model = Slug::where('slug',$slug)->first();
        if(!$model){
            return view('page.404');
        }
        switch ($model->entity_type) {
            case ENTITY_TYPE_PRODUCT:
            $product = Product::where([
                                    ['trang_thai','=',1],
                                    ['id','=',$model->entity_id]
            ])->first();
            $same_pro = Product::where([
                                        ['trang_thai', '=', 1],
                                        ['id_danh_muc', '=', $product->id_danh_muc]
            ])->orderBy('created_at','DESC')->take(8)->get();
            $new_pro = Product::where('trang_thai', 1)->orderBy('created_at','DESC')->take(8)->get();
            $commentsp = CommentSanPham::where('id_san_pham',$product->id)->paginate(10);
                return view('user.product_detail', compact('product','commentsp','new_pro','same_pro'));
                break;
            case ENTITY_TYPE_TYPE:
            $cate = Category::where([
                                    ['trang_thai','=',1],
                                    ['id','=',$model->entity_id]
            ])->first();
            $count = Product::where([
                                    ['trang_thai','=',1],
                                    ['id_danh_muc', '=', $model->entity_id]
            ])->get();
            $product = Product::where([
                                    ['trang_thai','=',1],
                                    ['id_danh_muc', '=', $model->entity_id]
            ])->paginate(12);
            return view('user.category', compact('product','count','cate'));
            break;
            case ENTITY_TYPE_MENH:
                $menh = Menh::where([
                                    ['trang_thai','=',1],
                                    ['id','=',$model->entity_id] 
                ])->first();
                $count = Product::where([
                                        ['trang_thai','=',1],
                                        ['id_menh', '=', $model->entity_id]
                ])->get();
                $product = Product::where([
                                        ['trang_thai','=',1],
                                        ['id_menh', '=', $model->entity_id]
                ])->paginate(12);
                return view('user.menh', compact('product','count','menh'));
                break;
            default:
                # code...
                break;
        }
    	// return view('user.product_detail', compact('product','commentsp','new_pro','same_pro'));
    }
    // public function getAllProduct($id){
    //     $id_cate = $id;
    //     $cate = Category::find($id)->first();
    //     $count = Product::where('id_danh_muc',$id)->get();
    //     $product = Product::where('id_danh_muc',$id)->paginate(12);
    //     return view('user.category', compact('product','count','cate'));
    // }
    /*
    lấy sản phẩm theo mệnh
    return view 
    author TuanNguyen
    10/05/2018 create new
     */
    // public function getProductByMenh($id){
    //     $id_menh = $id;
    //     $menh = Menh::find($id)->first();
    // 	$count = Product::where('id_menh',$id)->get();
    // 	$product = Product::where('id_menh',$id)->paginate(12);
    // 	return view('user.menh', compact('product','count','menh'));
    // }
    public function addCart($id){

        if (isset($id)) {
            $sl = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
            $product = Product::find($id);
            if(isset($product)){
            Cart::add($id, $product->ten_san_pham,$sl,$product->gia,['anh' => $product->anh]);
            $cart = Cart::content();
            return redirect(route('index'));
                
            }
    }
}
    public function addCarts(Request $rq){

    		$sl =  $rq->quantity;
            $id = $rq->id;
    		$product = Product::find($id);
            if(isset($product)){
            Cart::add($id, $product->ten_san_pham,$sl,$product->gia,['anh' => $product->anh]);
            $cart = Cart::content();
            return redirect(route('index'));
                
    }
}
//     public function updateCart(Request $rq){
//         $id = $rq->id;
//         $qty = $rq->qty;
//         Cart::update($id, $qty);
//         return "ok";

// }
public function updateCart($rowId, $quantity){
        Cart::update($rowId, $quantity);
        return redirect()->route('showCart');
}
    public function removeCart($rowId){
        if(isset($rowId)){
            Cart::remove($rowId);
            return redirect(route('index'));
        }else{
            return view('page.404');
        }
    }
    /*chuyển đến trang thanh toán thanh toan
    return view
    author TuanNguyen
    15/04/2018 create new*/

    public function checkOut(){
        $cart = Cart::content();
        $total = Cart::subtotal();
        $user = Auth::user();
        return view('user.checkout',compact('cart','total','user'));
    }
    /* xử lý thanh toán
    return view
    author TuanNguyen
    15/04/2018 create new*/
    public function checkoutComplete(Request $rq){
        $cart = Cart::content();
        $total = Cart::subtotal();
        $bill = new Bill();
        if(isset(Auth::user()->name)){
            $bill->id_khach_hang = $rq->id;
            //$customer = array('email' => Auth::user()->email, 'name' => Auth::user()->name );
            // $customer->name = Auth::user()->name;
            // $customer->email = Auth::user()->email;
            /*$bill->trang_thai = 0;
            $bill->dia_chi = $rq->dia_chi;
            $bill->phuong_thuc_thanh_toan = $rq->phuong_thuc_thanh_toan;
            $bill->tong_tien = $total;
            $bill->tien_thanh_toan = $total;
            $bill->ghi_chu = $rq->ghi_chu;*/
        }
        else
        {
            $check = User::where('email',$rq->email)->where('isLogin',1)->get();
            if(count($check)>0){
                return redirect()->route('login');
            }
            $customer = new User();
            $customer->name = $rq->name;
            $customer->dia_chi = $rq->dia_chi;
            $customer->sdt = $rq->sdt;
            $customer->email = $rq->email;
            $customer->isLogin = 0;
            $customer->trang_thai = 0;
            $customer->save();
            $bill->id_khach_hang = $customer->id;
        }
            $bill->trang_thai = 0;
            $bill->dia_chi = $rq->dia_chi;
            $bill->phuong_thuc_thanh_toan = $rq->phuong_thuc_thanh_toan;
            $bill->tong_tien = $total;
            $bill->tien_thanh_toan = $total;
            $bill->ghi_chu = $rq->ghi_chu;
        if(isset($rq->ma_khuyen_mai)){
                $result = KhuyenMai::where('ma_khuyen_mai',$rq->ma_khuyen_mai)->first();
                if(isset($result)){
                    $today = date("Y/m/d");
                    $start_date = $result->ngay_bat_dau;
                    $end_date = $result->ngay_ket_thuc;
                    $sl = $result->so_luong_con_lai;
                    $trang_thai = $result->trang_thai;
                    $chiet_khau = $result->chiet_khau;
                    $bill->chiet_khau = $result->chiet_khau;
                    $bill->maKM = $rq->ma_khuyen_mai;
                    if ((strtotime($today) >= strtotime($start_date)) && (strtotime($today) <= strtotime($end_date)) && ($sl > 0) && $trang_thai ==1) {
                        $cvr_total = (float)$total;
                        $bill->tien_thanh_toan = ($total * (100- $chiet_khau))/100;
                        $result->so_luong_con_lai = $result->so_luong_con_lai - 1;
                        $result->save();
                    }
                }
            }
            $bill->save();
            foreach ($cart as $key => $value) {
                $bill_detail = new BillDetail();
                $bill_detail->id_san_pham = $value->id;
                $bill_detail->so_luong = $value->qty;
                $tt = (float)($value->price);
                $bill_detail->thanhtien =  $tt;
                $bill_detail->id_bill =  $bill->id;
                $bill_detail->save();
            }
            Cart::destroy();
             if(isset(Auth::user()->name)){
                return redirect()->route('index');
             }
            return redirect()->route('send.mail',['customer' => $customer, 'bill'=>$bill]);
            // return redirect(route('index'));
    }
     /* trang thông tin cá nhân của khách hàng đã đăng nhập
    return view
    author TuanNguyen
    04/05/2018 create new*/
    public function sendPass(Request $rq){
        $email = $rq->email;
        $user = User::where('email',$email)->first();
        if(!$user){
            return view('page.403');
        }
        $pass = $user->password;
    }
     /* Trả về trang chính sách cửa hàng
    return view
    author TuanNguyen
    05/05/2018 create new*/
    public function infoCuaHang($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        if($id == 1 ){
            $chinhsach = Info::find($id);
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('user.chinhsach', compact('chinhsach'));
        }
        if($id == 2 ){
            $tuyendung = Info::find($id);
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('user.tuyendung', compact('tuyendung'));
        }
        if($id == 3 ){
            $lienhe = Info::find($id);
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('user.lienhe', compact('lienhe'));
        }
        if($id != 1 && $id != 2 && $id != 3){
            return view('page.404');
        }
    }
     /* trang thông tin cá nhân của khách hàng đã đăng nhập
    return view
    author TuanNguyen
    19/04/2018 create new*/
    public function getProfile($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $user = User::find($id);
        if(!isset($user)){
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('page.404');
        }
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            $bills = Bill::where('id_khach_hang',$user->id)->paginate(10);
            return view('user.customer',compact('user','bills'));
    }
     /* lưu thông tin chỉnh sửa thông tin khách hàng
    return view
    author TuanNguyen
    07/05/2018 create new*/
    public function saveProfile(SaveCustomerProfileRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = User::find(Auth::user()->id);
        $model->fill($rq->all());
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('index'));
    }
    /*
    Lưu thay đổi mật khẩu
    @author TuanNguyen
    @return view
    @date 08/05/2018 - create new
     */
    public function savechangePass(SaveChangePasswordRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        if(Hash::check($rq->oldPass, Auth::user()->password)){
            $newPass = Hash::make($rq->newPass);
            Auth::user()->password = $newPass;
            Auth::logout();
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return redirect(route('login'));
        }
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('password.change'))->with('errMsg', 'Invalid old password');
    }

     /* chỉnh sửa password
    return view
    author TuanNguyen
    08/05/2018 create new*/
    public function changePass(){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('user.change-pwd');
    }

     /* chỉnh sửa thông tin cá nhân khách hàng
    return view
    author TuanNguyen
    07/05/2018 create new*/
    public function changeProfile($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $user = User::find($id);
        if(!isset($user)){
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('page.404');
        }
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('user.cus_change_profile',compact('user'));
    }
    /* Gửi phản hồi
    return view
    author TuanNguyen
    22/04/2018 create new*/
    public function sendContact(Request $rq){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        $contact = new PhanHoi();
        $contact->fill($rq->all());
        $contact->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('index'));
    }
    /* Chuyển đến trang khuyến mãi
    return view
    author TuanNguyen
    07/05/2018 create new*/
    public function getKhuyenMai(){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        $today = date("Y-m-d");
        $result = KhuyenMai::where('trang_thai', 1)
                        ->where('ngay_ket_thuc', '>=', $today)->get();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('user.khuyenmai', compact('result'));
    }
    /* Chuyển đến trang chi tiết khuyến mãi
    return view
    author TuanNguyen
    07/05/2018 create new*/
    public function getKhuyenMaiDetail($id){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        $today = date("Y-m-d");
        $km = KhuyenMai::where('id',$id)
                        ->where('trang_thai', 1)
                        ->where('ngay_ket_thuc', '>=', $today)->get();
        if(!$km){
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            return view('page.404');
        }
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('user.khuyenmai_chitiet', compact('km'));
    }
    /* Thêm comment trang sản phẩm
    return view
    author TuanNguyen
    22/04/2018 create new*/
    public function commentProduct(Request $rq){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        $model = new CommentSanPham();
        $model->fill($rq->all());
        $model->trang_thai = 1;
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect()->back();
    }
    /* Thêm comment trang tin tức
    return view
    author TuanNguyen
    05/05/2018 create new*/
    public function commentTinTuc(Request $rq){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        $model = new CommentTinTuc();
        $model->fill($rq->all());
        $model->trang_thai = 1;
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect()->back();
    }
    /* lấy thông tin chi tiết của đơn hàng
    return view
    author TuanNguyen
    22/04/2018 create new*/
    public function getBillDetail($id){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if(!isset($id)){
            return view('page.404');
        }
        $bill_detail = BillDetail::where('id_bill', $id)->get();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('user.customer_billdetail', compact('bill_detail'));
    }
    public function getSearchResult(Request $rq){
        $key = $rq->key;
        $cate = $rq->cate;
        if($cate==0){
            $total = Product::where('ten_san_pham','like', "%$key%")->get();
            $result = Product::where('ten_san_pham','like', "%$key%")->paginate(20);
        }else{
            $total = Product::where('ten_san_pham','like',"%$key%")->where('id_danh_muc',$cate)->get();
            $result = Product::where('ten_san_pham','like',"%$key%")->where('id_danh_muc',$cate)->paginate(20);
        }
        return view('user.search',compact('result','key','total'));
    }

    public function showCart(){
        $cart = Cart::content();
        $total = Cart::subtotal();
        return view('user.cart_detail',compact('cart','total'));
    }
    public function getNew(){
        $tintuc = TinTuc::orderBy('created_at','DESC')->paginate(10);
        return view('user.tintuc', compact('tintuc'));
    }
    /*lấy thông tin chi tiết của bài viết
    author TuanNguyen
    return bool
    08/04/2018 create new*/
    public function chitietTin($id){
        $tin = TinTuc::find($id);
        $comment_tin_tuc = CommentTinTuc::where('id_tin_tuc',$tin->id)->paginate(10);
        if(!$tin){
            return view('page.404');
        }
        else{
            return view('user.chitiettin',compact('tin','comment_tin_tuc'));
        }
    }
}
