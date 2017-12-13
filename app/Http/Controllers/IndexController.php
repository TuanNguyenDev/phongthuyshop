<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\TrinhChieu;
use Log;
use DB;
class IndexController extends Controller
{
	/*
	
	 */
    public function getIndex(){
    	$slide_first = TrinhChieu::first();
    	$slides = TrinhChieu::where('id','<>',$slide_first->id)->get();
    	$cates = Category::all();
    	return view('user.index',compact('slides','slide_first','cates'));
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
    		if(!empty($COOKIE['cart'])){
    			$cart = $_COOKIE['cart'];
    			if(array_key_exists($id, $cart)){
    				$cart[$id] = array(
    					"id" => $id,
    					"sl" => (int)$cart[$id]["sl"]+$sl,
    					"ten" => $product->ten_san_pham,
    					"gia" => $product->gia,
    					"anh" => $product->anh,
    					"total_item" => (int) $cart[$id]["total_item"] + $product->gia

    				);
    			}else{
    				$cart[$id] = array(
    					"id" => $id,
    					"sl" => $sl,
    					"ten" => $product->ten_san_pham,
    					"gia" => $product->gia,
    					"anh" => $product->anh,
    					"total_item" => (int)$product->gia
    				);
    			}
    		}else{
    			$cart[$id] = array(
    				"id"=> $id,
					"sl"=>$sl,
					"ten" => $product->ten_san_pham,
					"gia" => $product->gia,
					"anh" => $product->anh,
					"total_item" => (int)$product->gia * $sl
    			);
    		}
    		$COOKIE['cart'] = $cart;
    	}else{
    		echo "No id to add cart";
    	}
    	$tong = 0;
    	foreach ($cart as $key => $value) {
    		$tong +=$value['total_item'];
    	}
    	$COOKIE['total'] = $tong;
    	return redirect('user.index');
    }
}
