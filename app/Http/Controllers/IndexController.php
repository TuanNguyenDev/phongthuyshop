<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckOutRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\TinTuc;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\TrinhChieu;
use App\Models\KhuyenMai;
use App\Models\PhanHoi;
use App\Models\Slug;
use App\Models\Customer;
use App\Models\CommentSanPham;
use App\User;
use Illuminate\Http\Response;
use Auth;
use Log;
use DB;
use Cart;
class IndexController extends Controller
{
	/*
	
	 */
    public function getIndex(){
    	$slide_first = TrinhChieu::first();
    	$slides = TrinhChieu::all();
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
            return 'not found';
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
            
            default:
                # code...
                break;
        }
    	return view('user.product_detail', compact('product','commentsp','new_pro','same_pro'));
    }
    public function getAllProduct($id){
    	$count = Product::where('id_danh_muc',$id);
    	$product = Product::where('id_danh_muc',$id)->paginate(12);
    	return view('user.category', compact('product','count'));
    }
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
    public function updateCart(Request $rq){
        $id = $rq->id;
        $qty = $rq->qty;
        Cart::update($id, $qty);
        return "ok";

}
    public function removeCart($rowId){
        if(isset($rowId)){
            Cart::remove($rowId);
            return redirect(route('index'));
        }else{
            echo "Bạn vừa truy cập vào đường dẫn không tồn tại";
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
            /*$bill->trang_thai = 0;
            $bill->dia_chi = $rq->dia_chi;
            $bill->phuong_thuc_thanh_toan = $rq->phuong_thuc_thanh_toan;
            $bill->tong_tien = $total;
            $bill->tien_thanh_toan = $total;
            $bill->ghi_chu = $rq->ghi_chu;*/
        }
        else
        {
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
            return redirect(route('index'));
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
            return '403';
        }
            Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
            $bills = Bill::where('id_khach_hang',$user->id)->paginate(10);
            return view('user.customer',compact('user','bills'));
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
    /* lấy thông tin chi tiết của đơn hàng
    return view
    author TuanNguyen
    22/04/2018 create new*/
    public function getBillDetail($id){
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if(!isset($id)){
            return '403';
        }
        $bill_detail = BillDetail::where('id_bill', $id)->get();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('user.customer_billdetail', compact('bill_detail'));
    }
    public function getSearchResult(Request $rq){
        $key = $rq->key;
        $cate = $rq->cate;
        if($cate=0){
            $total = Product::where('ten_san_pham','like', "%$key%")->get();
            $result = Product::where('ten_san_pham','like', "%$key%")->paginate(20);
        }else{
            $total = Product::where('ten_san_pham','like',"%$key%")->orWhere('id_danh_muc',$cate)->get();
            $result = Product::where('ten_san_pham','like',"%$key%")->orWhere('id_danh_muc',$cate)->paginate(20);
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

        if(!$tin){
            return 'Error';
        }
        else{
            return view('user.chitiettin',compact('tin'));
        }
    }
}
