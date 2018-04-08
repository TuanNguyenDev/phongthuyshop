<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use Hash;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SaveProfileRequest;
use App\Http\Requests\SaveChangePasswordRequest;

class ProfileController extends Controller
{
	/*
	Update thông tin quản trị
	@author TuanNguyen
	@return view
	@date 01/04/2018 - create new
	 */
    public function update(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$admin = Auth::user();
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.profile.form', compact('admin'));
    }
    /*
	Save thông tin quản trị
	@author TuanNguyen
	@return view
	@date 01/04/2018 - create new
	 */
	public function save(SaveProfileRequest $rq){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = Admin::find(Auth::user()->id);
		$model->fill($rq->all());
		if($rq->hasFile('anh')){
			$fileName = uniqid() . "." . $rq->anh->extension();
			$rq->anh->storeAs('uploads', $fileName);
			$model->avatar = 'uploads/'.$fileName;
		}
		$model->save();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return redirect(route('dashboard'));
	}
	/*
	chuyển đến form thay mật khẩu
	@author TuanNguyen
	@return view
	@date 01/04/2018 - create new
	 */
	public function changePwdForm(){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.profile.change-pwd');
    }
    /*
	Lưu thay đổi mật khẩu
	@author TuanNguyen
	@return view
	@date 01/04/2018 - create new
	 */
    public function saveChangePwd(SaveChangePasswordRequest $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	if(Hash::check($rq->oldPass, Auth::user()->password)){
    		$newPass = Hash::make($rq->newPass);
    		Auth::user()->password = $newPass;
    		Auth::logout();
    		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    		return redirect(route('admin.login'));
    	}
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return redirect(route('password.change'))->with('errMsg', 'Invalid old password');
    }
}
