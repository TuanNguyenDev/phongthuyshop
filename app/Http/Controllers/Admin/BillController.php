<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Customer;
use App\User;
use Log;
use Illuminate\Support\Facades\Auth;
class BillController extends Controller
{
    /*
	Lấy danh sách các bill đang chờ chấp nhận
	@author TuanNguyen
	@return view
	@date 24/04/2018 - create new
	 */
	public function billWaitting(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$bills = Bill::where('trang_thai', 0)->get();
		if(!$bills){
			return '403';
		}
		$rdr = 'waitting';
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.bill.listwait', compact('bills','rdr'));
	}
    /*
	Lấy danh sách các bill đang giao hàng
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
	public function billMoving(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$bills = Bill::where('trang_thai', 1)->get();
		if(!$bills){
			return '403';
		}
		$rdr = 'moving';
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.bill.listmoving', compact('bills','rdr'));
	}
    /*
	Lấy danh sách các bill đã thành công
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
	public function billSuccess(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$bills = Bill::where('trang_thai', 2)->get();
		if(!$bills){
			return '403';
		}
		$rdr = 'success';
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.bill.listsuccess', compact('bills','rdr'));
	}
    /*
	Lấy danh sách các bill bị hủy
	@author TuanNguyen
	@return view
	@date 10/05/2018 - create new
	 */
	public function billFail(){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$bills = Bill::where('trang_thai', 3)->get();
		if(!$bills){
			return '403';
		}
		$rdr = 'fail';
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.bill.listfail', compact('bills','rdr'));
	}
	/*
	Chấp nhận bill
	@author TuanNguyen
	@return view
	@date 24/04/2018 - create new
	 */
	public function billAccept($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return '403';
		}
		$bills = Bill::find($id);
		if(!$bills){
			return '403';
		}
		$bills->trang_thai = 1;
		$bills->nguoi_lap = Auth::id();
		$bills->save();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return redirect(route('bill.waitting'));
	}
	/*
	Hoàn thành bill
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
	public function billComplete($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return '403';
		}
		$bills = Bill::find($id);
		if(!$bills){
			return '403';
		}
		$bills->trang_thai = 2;
		$bills->save();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return redirect(route('bill.moving'));
	}
	/*
	Xác nhận bill không hoàn thành
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
	public function billCancel($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return '403';
		}
		$bills = Bill::find($id);
		if(!$bills){
			return '403';
		}
		$bills->trang_thai = 3;
		$bills->save();
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return redirect(route('bill.moving'));
	}
	/*
	Xem chi tiết đơn hàng
	@author TuanNguyen
	@return view
	@date 24/04/2018 - create new
	 */
	public function billDetail($id, $rdr){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return '403 id';
		}
		$bills = Bill::find($id);
		if(!isset($bills)){
			return '403 bill';
		}
		$rd = $rdr;
		$billdetail = BillDetail::where('id_bill',$id)->get();
		$cus = User::find($bills->id_khach_hang);
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.bill.detail', compact('bills','billdetail','cus','rd'));
	}
}
