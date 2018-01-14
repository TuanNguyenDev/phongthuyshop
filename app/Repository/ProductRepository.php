<?php 
namespace App\Repository;
use Log;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ProductRepository{
	/*
	@author TuanNguyen
	@return array
	@date 14/01/2017 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$productList = Product::where('name','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $productList;
		}else{
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			$productList = Product::paginate(20);
			return $productList;
		}
	}
}

 ?>