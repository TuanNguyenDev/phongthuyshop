<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Models\KhuyenMai;
use App\Http\Requests\SavePromotionRequest;
use App\Repository\PromotionRepository;
class PromotionController extends Controller
{
	/*
	chuyển tới list  khuyến mãi
	@author TuanNguyen
	@return view
	@date 15/04/2018 - create new
	 */
	public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$promotions = PromotionRepository::getAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.promotion.list', compact('promotions','keyword', 'ctlPageSize'));
    }
	/*
	chuyển tới Form tạo mới và update khuyến mãi
	@author TuanNguyen
	@return view
	@date 15/04/2018 - create new
	 */
    public function createPromotion(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = new KhuyenMai();
    	$title = 'Thêm mới chương trình khuyến mãi';
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.promotion.form', compact('model','title'));
    }
    /*
	Thay đổi trạng thái của một khuyến mãi
	@author TuanNguyen
	@return view
	@date 15/04/2018 - create new
	 */
	public function statusPromotion($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = KhuyenMai::find($id);
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
        return redirect(route('promotion.list'));
    }
	/*
	Xóa một Promotion
	@author TuanNguyen
	@return view
	@date 15/04/2018 - create new
	 */
	public function delete($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = PromotionRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('promotion.list'));
        }else{
            return 'Error';
        }
    }
	/*
	Lưu một Promotion
	@author TuanNguyen
	@return view
	@date 15/04/2018 - create new
	 */
	public function savePromotion(SavePromotionRequest $rq){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = PromotionRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('promotion.list'));
        }else{
            return 'Error';
        }
	}
}
