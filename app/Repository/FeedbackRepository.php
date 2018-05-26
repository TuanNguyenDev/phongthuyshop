<?php 
namespace App\Repository;
use Log;
use App\Models\PhanHoi;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

/**
 * 
 */
class FeedbackRepository
{
	/*
	@author TuanNguyen
	@return array
	@date 14/05/2018 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$feedbackList = PhanHoi::where('noi_dung','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $feedbackList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$feedbackList = PhanHoi::paginate(10);
			return $feedbackList;
		}
	}
	/*
	@author TuanNguyen
	@return boolean
	@date 14/05/2018 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = PhanHoi::find($id);
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
}
	
 ?>