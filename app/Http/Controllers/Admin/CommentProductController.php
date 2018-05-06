<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use DB;
use App\Models\CommentSanPham;
class CommentProductController extends Controller
{
	/*
	Lấy danh sách các comment sản phẩm
	@author TuanNguyen
	@return view
	@date 05/05/2018 - create new
	 */
    public function getList($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$id_sp = $id;
    	$commentsp = CommentSanPham::where('id_san_pham',$id)->orderBy('created_at', 'desc')->paginate(20);
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.comment.list_product', compact('commentsp','id_sp'));
    }
    /*
	Xóa comment
	@author TuanNguyen
	@return view
	@date 06/05/2018 - create new
	 */
	public function deleteComment($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = CommentSanPham::find($id);
		if(!$model){
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return false;
		}
		$id_sp = $model->id_san_pham;
		DB::beginTransaction();
		try
		{
			$model->delete();
			DB::commit();
			Log::info('END ' . get_class() . ' => ' . __FUNCTION__ . '()');
			return redirect(route('product.comment',['id' => $id_sp]));
		}catch(\Exception $ex){
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
			DB::rollback();
			return '403';
		}
	}
    /*
	Thay đổi trạng thái hiển thị comment
	@author TuanNguyen
	@return view
	@date 05/05/2018 - create new
	 */
    public function changeStatus($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = CommentSanPham::find($id);
        if(!$model){
        	return 'Error';
        }
        if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('product.comment',['id' => $model->id_san_pham]));
    }
}
