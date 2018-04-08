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
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$productList = Product::where('ten_san_pham','like', "%$keyword%")->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $productList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$productList = Product::paginate(10);
			return $productList;
		}
	}
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new Product();
			}else{
				$model = Product::find($rq->id);
			}
			$model->fill($rq->all());
			$model->id_danh_muc = $rq->id_type;
			$model->id_menh = $rq->id_menh;
			$model->mo_ta = $rq->mo_ta;
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
			dd($ex->getMessage());
			Log::error('END '  . get_class() . ' => ' . __FUNCTION__ . '() - ' . $ex->getMessage());
			DB::rollback();
			return false;
		}
	}
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = Product::find($id);
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