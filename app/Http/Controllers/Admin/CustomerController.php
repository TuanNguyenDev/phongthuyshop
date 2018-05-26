<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Bill;
use App\Models\BillDetail;
use Log;
use App\Repository\CustomerRepository;

class CustomerController extends Controller
{
	/*
	Lấy danh sách khách hàng đã đăng kí
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
    public function getListLogged(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$cus = CustomerRepository::ListLogged($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.customer.listLogged', compact('cus','keyword','ctlPageSize'));
    }
    /*
	Lấy danh sách khách hàng đã đăng kí
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
    public function getListNoLogin(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$cus = CustomerRepository::ListNoLogin($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.customer.listNoLogin', compact('cus','keyword','ctlPageSize'));
    }
	/*
	Thay đổi trạng thái khách hàng
	@author TuanNguyen
	@return view
	@date 25/04/2018 - create new
	 */
	public function statusCustomer($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $model = User::find($id);
        if(!$model){
            return view('page.404');
        }
        if($model->trang_thai == 1){
            $model->trang_thai = 0;
        }else{
            $model->trang_thai = 1;
        }
        $model->save();
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        return redirect(route('customer.logged'));
    }

    /*
	Xem thông tin đơn hàng của khách hàng
	@author TuanNguyen
	@return view
	@date 26/04/2018 - create new
	 */
	public function customerBill($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		$model = Bill::where('id_khach_hang',$id)->get();
		$cus = User::find($id);
		if(!$model){
			return 'Không có đơn hàng nào!';
		}
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.customer.billdetail',compact('model','cus'));

	}
    /*
	Xóa khách hàng
	@author TuanNguyen
	@return view
	@date 26/04/2018 - create new
	 */
    public function deleteCustomer($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = CustomerRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('customer.logged'));
        }else{
            return view('page.404');
        }
    }

	/*
	Xem chi tiết đơn hàng
	@author TuanNguyen
	@return view
	@date 28/04/2018 - create new
	 */
	public function billDetail($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return view('page.404');
		}
		$bills = Bill::find($id);
		if(!isset($bills)){
			return view('page.notfound');
		}
		$billdetail = BillDetail::where('id_bill',$id)->get();
		$cus = User::find($bills->id_khach_hang);
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.customer.customerbill_detail', compact('bills','billdetail','cus'));
	}
	/*
	Xem chi tiết đơn hàng của khách hàng chưa đăng kí
	@author TuanNguyen
	@return view
	@date 28/04/2018 - create new
	 */
	public function noLoginBillDetail($id){
		Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
		if(!isset($id)){
			return view('page.404');
		}
		$cus = User::find($id);
		if(!isset($cus)){
			return view('page.notfound');
		}
		$bills = Bill::where('id_khach_hang',$cus->id)->first();
		$billdetail = BillDetail::where('id_bill',$bills->id)->get();
		$phanbiet = 1;
		Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
		return view('admin.customer.customerbill_detail', compact('bills','billdetail','cus','phanbiet'));
	}
}
