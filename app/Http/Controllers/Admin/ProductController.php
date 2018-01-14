<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Log;
use App\Repository\ProductRepository;

class ProductController extends Controller
{
	/*
	Lấy danh sách sản phẩm
	@author TuanNguyen
	@return view
	@date 14/01/2017 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$products = ProductRepository::getAll($rq);
    	dd($products->getMenh());
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.product.list', compact('products','keyword', 'ctlPageSize'));
    }
}
