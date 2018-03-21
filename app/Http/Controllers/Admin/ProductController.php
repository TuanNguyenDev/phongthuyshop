<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Menh;
use App\Models\Slug;
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
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.product.list', compact('products','keyword', 'ctlPageSize'));
    }

    public function createProduct(){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = new Product();
        $modelSlug = new Slug();
        $modelSlug->entity_type = $model->entityType;
        $modelSlug->entity_id = $model->id;
        $listType = Category::all();
        $listMenh = Menh::all();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.product.form', compact('model','listType','listMenh','modelSlug'));
    }
}
