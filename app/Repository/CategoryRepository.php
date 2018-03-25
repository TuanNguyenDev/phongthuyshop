<?php 
namespace App\Repository;
use Log;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class CategoryRepository
{
	/*
	@author TuanNguyen
	@return array
	@date 25/03/2018 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if ($rq->input('keyword') != "" || $rq->input('pageSize') != "") {
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$cateList = Category::where('ten_danh_muc','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			return $cateList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$cateList = Category::paginate(10);
			return $cateList;
		}
	}
}
 ?>