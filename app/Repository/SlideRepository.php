<?php 
namespace App\Repository;
use Log;
use App\Models\TrinhChieu;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class SlideRepository{
	/*
	@author TuanNguyen
	@return bool
	@date 11/04/2017 - create new
	 */
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new TrinhChieu();
			}else{
				$model = TrinhChieu::find($rq->id);
			}
			$model->updated_by = $rq->updated_by;
			$model->mo_ta = $rq->mo_ta;
			if($rq->hasFile('anh')){
				$fileName = uniqid() . "." . $rq->anh->extension();
				$rq->anh->storeAs('uploads', $fileName);
				$model->anh = 'uploads/'.$fileName;
			}
			$model->save();
			DB::commit();
			Log::info('END '  . get_class() . ' => ' . __FUNCTION__ . '()');
			return true;
		}catch(\Exception $ex){
			dd($ex->getMessage());
			Log::error('END '  . get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
	/*
	@author TuanNguyen
	@return bool
	@date 11/04/2017 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = TrinhChieu::find($id);
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
