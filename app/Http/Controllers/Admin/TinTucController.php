<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveNewsRequest;
use Log;
use App\Models\TinTuc;
use App\Models\Slug;
use App\Repository\TinTucRepository;
class TinTucController extends Controller
{
	/*
	Lấy danh sách tin tức
	@author TuanNguyen
	@return view
	@date 02/04/2018 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$news = TinTucRepository::GetAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.news.list', compact('news', 'keyword','ctlPageSize'));
    }
    /*
	Form tạo mới tin tức
	@author TuanNguyen
	@return view
	@date 02/04/2018 - create new
	 */
    public function createNew(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = new TinTuc();
    	$modelSlug = new Slug();
    	$modelSlug->entity_type = $model->entityType;
    	$modelSlug->entity_id = $model->id;
    	$title = 'Thêm mới bài viết';
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.news.form', compact('model','modelSlug','title'));
    }
    /*
	Lưu một tin tức khi sửa hoặc tạo mới
	@author TuanNguyen
	@return view
	@date 02/04/2018 - create new
	 */
    public function saveNew(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = TinTucRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('tintuc.list'));
        }else{
            return view('page.notfound');
        }
    }
    /*
	Gọi đến form update tin tức
	@author TuanNguyen
	@return view
	@date 02/04/2018 - create new
	 */
    public function updateNew($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = TinTuc::find($id);
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
        $title = 'Sửa thông tin tin tức';
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.news.form', compact('model','modelSlug','title'));
    }
    /*
	Xóa 1 tin tức
	@author TuanNguyen
	@return view
	@date 02/04/2018 - create new
	 */
    public function deleteNew($id){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = TinTucRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('tintuc.list'));
        }else{
            return view('page.notfound');
        }
    }
}
