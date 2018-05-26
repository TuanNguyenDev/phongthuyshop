<?php 
namespace App\Repository;
use Log;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Requests\SaveNewsRequest;
use DB;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class TinTucRepository 
{
	/*
	@author TuanNguyen
	@return array
	@date 14/01/2017 - create new
	 */
	public static function GetAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input('keyword');
			$pageSize = $rq->input('pageSize');
			$tintucList = TinTuc::where('name','like', "%$keyword%")->paginate($pageSize)->withPath("?keyword=$keyword&pageSize=$pageSize");
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return $tintucList;
		}else{
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			$tintucList = TinTuc::paginate(20);
			return $tintucList;
		}
	}

	/*
	@author TuanNguyen
	@return bool
	@date 14/01/2017 - create new
	 */
	
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new TinTuc();
			}else{
				$model = TinTuc::find($rq->id);
			}
			$model->fill($rq->all());
			$model->id_tac_gia = $rq->nguoi_tao;
			if($rq->hasFile('anh')){
				$fileName = uniqid() . "." . $rq->anh->extension();
				$rq->anh->storeAs('uploads', $fileName);
				$model->anh = 'uploads/'.$fileName;
			}
			$model->save();
			DB::table('slugs')->where([
				['entity_id', '=', $model->id],
				['entity_type', '=', $model->entityType]
			])->delete();
			$slug = slug_generate($model->ten_san_pham);
			DB::table('slugs')->insert(
				[
					'entity_type' => $model->entityType,
					'entity_id' => $model->id,
					'slug' => $slug
				]
			);
			DB::commit();
			Log::info('END '  . get_class() . ' => ' . __FUNCTION__ . '()');
			return true;
		}catch(\Exception $ex){
			Log::error('END '  . get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
	/*
	@author TuanNguyen
	@return bool
	@date 14/01/2017 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = TinTuc::find($id);
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