<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveInfoRequest;
use Log;
use App\Models\Info;
use App\Repository\InfoRepository;

class InfoController extends Controller
{
    /*
	Lấy danh sách info 
	@author TuanNguyen
	@return view
	@date 09/04/2018 - create new
	 */
	public function getList(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$info = Info::all();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.info.list',compact('info'));

	}
	/*
	Chuyển đến form update info 
	@author TuanNguyen
	@return view
	@date 10/04/2018 - create new
	 */
	public function updateInfo($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = Info::find($id);
        if(!$model){
            return view('page.404');
        }
        $title = 'Sửa thông tin tin tức';
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.info.form', compact('model','title'));

	}
	/*
	Lưu thông tin cập nhập info 
	@author TuanNguyen
	@return view
	@date 10/04/2018 - create new
	 */
	public function saveInfo(SaveInfoRequest $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = InfoRepository::Save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('info.list'));
        }else{
            return view('page.notfound');
        }
    }
}
