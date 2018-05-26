<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menh;
use App\Models\Slug;
use App\Models\Product;
use Log;
use App\Repository\MenhRepository;
use App\Http\Requests\MenhRequest;

class MenhController extends Controller
{
    /*
	Lấy danh sách mệnh
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
	public function getList(Request $rq){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$menhs = MenhRepository::getAll($rq);
		$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.menh.list', compact('menhs','keyword', 'ctlPageSize'));
	}
	/*
	Tạo mới một mệnh
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
	public function createMenh(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = new Menh();
		$modelSlug = new Slug();
		$modelSlug->entity_type = $model->entityType;
        $modelSlug->entity_id = $model->id;
        $title = "Thêm mới mệnh";
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.menh.form', compact('model','modelSlug','title'));
	}
	/*
	lưu mệnh
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
	public function saveMenh(MenhRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = MenhRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('menh.list'));
        }else{
            return view('page.notfound');
        }

    }
    /*
	Update mệnh
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
    public function updateMenh($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = Menh::find($id);
        if(!$model){
            return view('page.404');
        }
        $modelSlug = Slug::where([
            'entity_type' => $model->entityType,
            'entity_id' => $model->id
        ])->first();
        if(!$modelSlug){
            $modelSlug = new Slug();
            $modelSlug->entity_type = $model->entityType;
            $modelSlug->entity_id = $model->id;
        }
        $title = 'Sửa thông tin mệnh'. " " . $model->ten_menh;
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.menh.form', compact('model','modelSlug','title'));
    }
    /*
	Update mệnh
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
    public function statusMenh($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = Menh::find($id);
    	if(!$model){
    		return view('page.404');
    	}
    	if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        $listProduct = Product::where('id_menh', $model->id)->get();
        if(!$listProduct){
        	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        	return redirect(route('menh.list'));
        }
        foreach ($listProduct as $list) {
            if($model->trang_thai == 1){
                $list->trang_thai = 1;
            }else{
                $list->trang_thai = 0;
            }
        	$list->save();
        }
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        	return redirect(route('menh.list'));
    }
    /*
    Xóa mệnh, đồng thời xóa cả những sản phẩm thuộc mệnh đó
    @author TuanNguyen
    @return view
    @date 27/03/2018 - create new
     */
    public function deleteMenh($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = MenhRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('menh.list'));
        }
        else
        {
            return view('page.notfound');
        }
    }
}
