<?php 
namespace App\Repository;
use Log;
use App\Models\Menh;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class MenhRepository
{
	/*
	@author TuanNguyen
	@return array
	@date 27/03/2018 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$menhList = Menh::where('ten_menh','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $menhList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$menhList = Menh::paginate(10);
			return $menhList;
		}
	}
	/*
	@author TuanNguyen
	@return bool
	@date 27/03/2018 - create new
	 */
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new Menh();
			}else{
				$model = Menh::find($rq->id);
			}
			$model->fill($rq->all());
			$model->save();
			DB::table('slugs')->where([
				['entity_id', '=', $model->id],
				['entity_type', '=', $model->entityType]
			])->delete();
			$slug = slug_generate($model->ten_menh);
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
	@return array
	@date 26/03/2018 - create bool
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		$model = Menh::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		$listProduct = Product::where('id_menh',$model->id)->get();
		DB::beginTransaction();
		try{
			$model->delete();
			if($listProduct){
				foreach ($listProduct as $list) {
					$list->delete();
				}
			}
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