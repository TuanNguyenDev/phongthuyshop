<?php 
namespace App\Repository;
use Log;
use App\User;
use Illuminate\Http\Request;
use DB;
use Hash; 
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class CustomerRepository 
{
		/*
	@author TuanNguyen
	@return array
	@date 25/04/2018 - create new
	 */
	public static function ListLogged(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$cusList = User::where('name','like', "%$keyword%")->where('isLogin','=',1)->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $cusList;
	}
	else{
		Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$cusList = User::where('isLogin','=',1)->paginate(10);
			return $cusList;
		}
	}
		/*
	@author TuanNguyen
	@return array
	@date 25/04/2018 - create new
	 */
	public static function ListNoLogin(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$cusList = User::where('name','like', "%$keyword%")->where('isLogin','=',0)->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $cusList;
	}
	else{
		Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$cusList = User::where('isLogin','=',0)->paginate(10);
			return $cusList;
		}
	}

	/*
	@author TuanNguyen
	@return bool
	@date 16/04/2018 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = User::find($id);
		if(!$model)
		{
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		DB::beginTransaction();
		try{
			$model->delete();
			DB::commit();
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			return true;
		}catch(\Exception $ex){
			Log::error('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
}

 ?>