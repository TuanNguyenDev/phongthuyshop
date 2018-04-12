<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\TinTuc;
use App\Models\TrinhChieu;
use Illuminate\Http\Response;
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
