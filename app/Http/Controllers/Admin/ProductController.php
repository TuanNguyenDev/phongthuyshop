<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Menh;
use App\Models\Slug;
use Log;
use App\Repository\ProductRepository;

class ProductController extends Controller
{
	/*
	Lấy danh sách sản phẩm
	@author TuanNguyen
	@return view
	@date 14/01/2017 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$products = ProductRepository::getAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.product.list', compact('products','keyword', 'ctlPageSize'));
    }

    public function createProduct(){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = new Product();
        $modelSlug = new Slug();
        $modelSlug->entity_type = $model->entityType;
        $modelSlug->entity_id = $model->id;
        $listType = Category::all();
        $listMenh = Menh::all();
        $title = 'Thêm mới sản phẩm';
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.product.form', compact('model','listType','listMenh','modelSlug','title'));
    }
    public function saveProduct(SaveProductRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = ProductRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('product.list'));
        }else{
            return 'Error';
        }

    }
    public function updateProduct($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = Product::find($id);
        if(!$model){
            return 'Error';
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
        $listType = Category::all();
        $listMenh = Menh::all();
        $title = 'Sửa thông tin sản phẩm'. " " . $model->ten_san_pham;
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.product.form', compact('model','listType','listMenh','modelSlug','title'));
    }
    public function statusProduct($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = Product::find($id);
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
        return redirect(route('product.list'));
    }
    public function deleteProduct($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = ProductRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('product.list'));
        }else{
            return 'Error';
        }
    }
}
