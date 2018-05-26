<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveSlideRequest;
use Log;
use App\Models\TrinhChieu;
use App\Repository\SlideRepository;

class SlideController extends Controller
{
    /*
	Lấy danh sách slide 
	@author TuanNguyen
	@return view
	@date 11/04/2018 - create new
	 */
	public function getList(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$slide = TrinhChieu::all();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.slide.list',compact('slide'));

	}
	/*
	chuyển tới form tạo mới slide 
	@author TuanNguyen
	@return view
	@date 11/04/2018 - create new
	 */
	public function create(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = new TrinhChieu();
        $title = 'Thêm mới slide trang chủ';
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.slide.form', compact('model','title'));
	}
	/*
	lưu slide 
	@author TuanNguyen
	@return view
	@date 11/04/2018 - create new
	 */
	public function save(SaveSlideRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = SlideRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('slide.list'));
        }else{
            return view('page.notfound');
        }

    }
    /*
	form update slide 
	@author TuanNguyen
	@return view
	@date 11/04/2018 - create new
	 */
	public function update($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = TrinhChieu::find($id);
        if(!$model){
            return view('page.404');
        }
        $title = 'Sửa thông tin slide';
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.slide.form', compact('model','title'));
    }
    /*
	form update slide 
	@author TuanNguyen
	@return view
	@date 11/04/2018 - create new
	 */
	public function delete($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = SlideRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('slide.list'));
        }else{
            return view('page.notfound');
        }
    }
}
