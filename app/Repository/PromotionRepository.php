<?php 
namespace App\Repository;
use Log;
use App\Models\KhuyenMai;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
/**
* 
*/
class PromotionRepository 
{
	/*
	@author TuanNguyen
	@return array
	@date 14/01/2017 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$promotionList = KhuyenMai::where('noi_dung','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $promotionList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$promotionList = KhuyenMai::paginate(10);
			return $promotionList;
		}
	}
	/*
	@author TuanNguyen
	@return array
	@date 15/04/2017 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = KhuyenMai::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		DB::beginTransaction();
		try{
			$model->delete();
			DB::commit();
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return true;
		}catch(\Exception $ex){
			Log::error('END '  . get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
	/*
	@author TuanNguyen
	@return array
	@date 15/04/2017 - create new
	 */
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			$model = new KhuyenMai();
			$model->fill($rq->all());
			$str = Str::random(10);
			$str = strtoupper($str);
			$model->ma_khuyen_mai = $str;
			$model->so_luong_con_lai = $model->so_luong;
			$model->trang_thai = 1;
			$model->save();
			DB::commit();
			Log::info('END '  . get_class() . ' => ' . __FUNCTION__ . '()');
			return true;
		}catch(\Exception $ex){
			Log::error('END '  . get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
}

?>