<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Models\Bill;
use App\Models\BillDetail;
class StatisticalController extends Controller
{
	/*
	Trả về form doanh thu
	@author TuanNguyen
	@return view
	@date 03/05/2018 - create new
	 */
    public function getRevenue(){
    	return view('admin.statistical.revenue_form');
    }
    /*
	Trả về kết quả  doanh thu
	@author TuanNguyen
	@return view
	@date 03/05/2018 - create new
	 */
    public function getResultManual(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$begin = $rq->ngay_bat_dau;
    	$end = $rq->ngay_ket_thuc;
    	$total = 0;
    	$pro = 0;
    	$result  = Bill::where('trang_thai',2)
    					->where('created_at','>=',$begin)
    					->where('created_at','<=',$end)->get();
    	$count = count($result);
    	foreach ($result as $key => $b) {
    		$total += $b->tong_tien;
    		$pro += $b->tien_thanh_toan;
    		$detail = BillDetail::where('id_bill',$b->id)->get();
    		foreach ($detail as $key => $value) {
    			$product = 0 + $value->so_luong;
    		}
    	}
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.statistical.result_manual', compact('begin','end','total','pro','count','product'));
    }
}
