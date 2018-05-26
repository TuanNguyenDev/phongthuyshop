<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Models\PhanHoi;
use App\Repository\FeedbackRepository;
class FeedbackController extends Controller
{
    /*
	Lấy danh sách các phản hồi
	@author TuanNguyen
	@return view
	@date 14/05/2018 - create new
	 */
    public function getList(Request $rq){
    	Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
    	$feedbacks = FeedbackRepository::getAll($rq);
    	$keyword = $rq->input('keyword');
    	$ctlPageSize = $rq->input('pageSize');
    	Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
    	return view('admin.feedback.list', compact('feedbacks','keyword', 'ctlPageSize'));
    }
    /*
    Trả về form gửi email
    @author TuanNguyen
    @return view
    @date 24/05/2018 - create new
     */
    public function returnFromMail($email, $name){
        return view('admin.feedback.form', compact('email','name'));
    }

    /*
	Xóa một phản hồi
	@author TuanNguyen
	@return view
	@date 14/05/2018 - create new
	 */
    public function deleteFeedback($id){
        Log::info("BEGIN " . get_class() . " => " . __FUNCTION__ ."()");
        $result = FeedbackRepository::Destroy($id);
        Log::info("END " . get_class() . " => " . __FUNCTION__ ."()");
        if($result){
            return redirect(route('feedback.list'));
        }else{
            return view('page.notfound');
        }
    }
    
}
