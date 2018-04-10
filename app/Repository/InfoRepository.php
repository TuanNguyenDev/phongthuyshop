<?php 
namespace App\Repository;
use Log;
use App\Models\Info;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class InfoRepository 
{
	
	public static function Save(Request $rq){

		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			$model = Info::find($rq->id);
			$model->fill($rq->all());
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