<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Log;
use App\Admin;
use App\Repository\UserRepository;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    /*
	Lấy danh sách user
	@author TuanNguyen
	@return view
	@date 3/04/2018 - create new
	 */
	public function getList(Request $rq){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$user = UserRepository::getAll($rq);
		$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.user.list',compact('user','keyword','ctlPageSize'));
	}
	/*
	redirect đến form tạo mới user
	@author TuanNguyen
	@return view
	@date 6/04/2018 - create new
	 */
	public function create(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$model = new Admin();
    	$listRole = Role::all();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return view('admin.user.form', compact('model', 'listRole'));
    }
    /*
	Lưu thông tin thêm mới hoặc chỉnh sửa user
	@author TuanNguyen
	@return view
	@date 6/04/2018 - create new
	 */
    public function save(SaveUserRequest $rq){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = UserRepository::save($rq);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('user.list'));
        }else{
            return 'Error';
        }
    }
}
