<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slug;
use App\Models\Product;
use Log;
use App\Repository\CategoryRepository;
use App\Http\Requests\SaveCategoryRequest;

class CategoryController extends Controller
{
	/*
	Lấy danh sách danh muc
	@author TuanNguyen
	@return view
	@date 25/03/2018 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$cates = CategoryRepository::getAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.cate.list', compact('cates', 'keyword','ctlPageSize'));
    }
    /*
	Tạo mới danh muc
	@author TuanNguyen
	@return view
	@date 25/03/2018 - create new
	 */
    public function createCategory(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = new Category();
    	$modelSlug = new Slug();
    	$modelSlug->entity_type = $model->entityType;
    	$modelSlug->entity_id = $model->id;
    	$title = 'Thêm mới danh mục';
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.cate.form', compact('model','modelSlug','title'));
    }
    /*
	Lưu danh muc
	@author TuanNguyen
	@return view
	@date 25/03/2018 - create new
	 */
    public function saveCate(Request $rq){
        $result = CategoryRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('category.list'));
        }else{
            return 'Error';
        }
    }
    /*
	Update danh muc
	@author TuanNguyen
	@return view
	@date 26/03/2018 - create new
	 */
    public function updateCategory($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = Category::find($id);
    	if(!$model){
    		return 'Error';
    	}
    	$modelSlug = Slug::where(
    		[
    			'entity_type' => $model->entityType,
    			'entity_id' => $model->id
    		]
    	)->first();
    	if(!$modelSlug){
    		$modelSlug = new Slug();
    		$modelSlug->entity_type = $model->entityType;
    		$modelSlug->entity_id = $model->id;
    	}
    	$title = 'Sửa thông tin danh mục' . " " .$model->ten_danh_muc;
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.cate.form', compact('model','modelSlug', 'title'));
    }
    /*
	Thay đổi trạng thái hiển thị danh mục
	@author TuanNguyen
	@return view
	@date 27/03/2018 - create new
	 */
    public function statusCategory($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = Category::find($id);
    	if(!$model){
    		return 'Error';
    	}
    	if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        $listProduct = Product::where('id_danh_muc', $model->id)->get();
        if(!$listProduct){
        	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        	return redirect(route('category.list'));
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
        	return redirect(route('category.list'));
    }
    /*
    Xóa danh mục danh mục, đồng thời xóa cả những sản phẩm thuộc danh mục đó
    @author TuanNguyen
    @return view
    @date 27/03/2018 - create new
     */
    public function deleteCategory($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = CategoryRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('category.list'));
        }
        else
        {
            return 'Error';
        }
    }
}
