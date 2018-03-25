<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slug;
use Log;
use App\Repository\CategoryRepository;

class CategoryController extends Controller
{
	/*
	Lấy danh sách danh muc
	@author TuanNguyen
	@return view
	@date 25/03/2018 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$cates = CategoryRepository::getAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.cate.list', compact('cates', 'keyword','ctlPageSize'));
    }
}
