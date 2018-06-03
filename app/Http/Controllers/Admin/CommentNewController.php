<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use DB;
use App\Models\CommentTinTuc;
class CommentNewController extends Controller
{
    /*
	Lấy danh sách các comment của 1 tin tức
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
    public function getList($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$id_new = $id;
    	$commentnew = CommentTinTuc::where('id_tin_tuc',$id)->orderBy('created_at', 'desc')->paginate(20);
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.comment.list_new', compact('commentnew','id_new'));
    }
    /*
	Lấy danh sách các comment của toàn bộ tin tức
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
    public function getAllList(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$commentnew = CommentTinTuc::paginate(20)->orderBy('created_at', 'desc');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.comment.list_new', compact('commentnew'));
    }
    /*
	Xóa comment
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
	public function deleteComment($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = CommentTinTuc::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		$id_new = $model->id_tin_tuc;
		DB::beginTransaction();
		try
		{
			$model->delete();
			DB::commit();
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return redirect(route('news.comment',['id' => $id_new]));
		}catch(\Exception $ex){
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		DB::rollback();
		return view('page.notfound');
		}
	}
    /*
	Xóa comment
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
	public function deleteCommentAll($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = CommentTinTuc::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		$id_new = $model->id_tin_tuc;
		DB::beginTransaction();
		try
		{
			$model->delete();
			DB::commit();
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return redirect(route('new.comment.all'));
		}catch(\Exception $ex){
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		DB::rollback();
		return view('page.notfound');
		}
	}
    /*
	Thay đổi trạng thái hiển thị comment
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
    public function changeStatus($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = CommentTinTuc::find($id);
        if(!$model){
        	return view('page.404');
        }
        if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('news.comment',['id' => $model->id_tin_tuc]));
    }
    /*
	Thay đổi trạng thái hiển thị comment
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
    public function changeStatusAll($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = CommentTinTuc::find($id);
        if(!$model){
        	return view('page.404');
        }
        if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('new.comment.all'));
    }
}
