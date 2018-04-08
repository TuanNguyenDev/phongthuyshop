<?php 
namespace App\Repository;
use Log;
use App\Admin;
use App\Models\UserRole;
use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class UserRepository 
{
	/*
	@author TuanNguyen
	@return array
	@date 3/04/2018 - create new
	 */
	public static function getAll(Request $rq){
		Log::info('BEGIN ' . get_class() . ' => ' . __FUNCTION__ . '()');
		if($rq->input('keyword') != "" || $rq->input('pageSize') != ""){
			$keyword = $rq->input("keyword");
			$pageSize = $rq->input('pageSize');
			$userList = Admin::where('ten_san_pham','like', "%$keyword%")->where('id','<>',Auth::user()->id)->paginate($pageSize)->withPath("keyword=$keyword&pageSize=$pageSize");
		Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		return $userList;
		}else{
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			$userList = Admin::where('id','<>',Auth::user()->id)->paginate(10);
			return $userList;
		}
	}
	/*
	@author TuanNguyen
	@return bool
	@date 6/04/2018 - create new
	 */
	public static function Save(Request $rq){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		DB::beginTransaction();
		try{
			if($rq->id == null){
				$model = new Admin();
			}
			else{
				$model = Admin::find($rq->id);

			}
			$model->fill($rq->all());
			$model->password = Hash::make($rq->password);
			if($rq->hasFile('image')){
				$fileName = uniqid() . "." . $rq->image->extension();
				$rq->image->storeAs('uploads', $fileName);
				$model->image = 'uploads/'.$fileName;
			}
			$model->id_quyen = $rq->role_name;
			$model->save();
			DB::table('user_role')->insert(
	        	[
	        		'id_user' => $model->id,
	        		'id_role' => $rq->role_name
	        	]
        	);
			
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
	/*
	@author TuanNguyen
	@return bool
	@date 7/04/2018 - create new
	 */
	public static function Destroy($id){
		Log::info('BEGIN ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
		$model = Admin::find($id);
		if(!$model)
		{
			Log::info('END ' 
			. get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		DB::beginTransaction();
		try{
			$role = UserRole::where('id_user',$id);
			$role->delete();
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