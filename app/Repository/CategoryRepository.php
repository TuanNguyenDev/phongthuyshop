<?php 
namespace App\Repository;
use Log;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCategoryRequest;
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
	/*
	@author TuanNguyen
	@return array
	@date 25/03/2018 - create new
	 */
	public static function Save(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new Category();
			}else{
				$model = Category::find($rq->id);
			}
			$model->fill($rq->all());
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
			$slug = slug_generate($model->ten_danh_muc);
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
	@date 26/03/2018 - create bool
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		$model = Category::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		$listProduct = Product::where('id_danh_muc',$model->id)->get();
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