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
}
