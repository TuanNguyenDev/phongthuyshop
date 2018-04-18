<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckOutRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\TinTuc;
use App\Models\Bill;
use App\Models\TrinhChieu;
use App\Models\KhuyenMai;
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
        $random = Product::all()->random(6);
    	return view('user.index',compact('slides','slide_first','cates','new_pro','random'));
    }

    public function getProductDetail($id){
    	$product = Product::find($id);
    	return view('user.product_detail', compact('product'));
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
            $bill->id_khach_hang = Auth::id();
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
                    $bill->ma_khuyen_mai = $rq->ma_khuyen_mai;
                    if ((strtotime($today) >= strtotime($start_date)) && (strtotime($today) <= strtotime($end_date)) && ($sl > 0) && $trang_thai ==1) {
                        $cvr_total = (float)$total;
                        $bill->tien_thanh_toan = ($total * (100- $chiet_khau))/100;
                        $result->so_luong_con_lai = $result->so_luong_con_lai - 1;
                        $result->save();
                        $bill->save();
                    }
                }
            }
        }else{
            
        }
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
