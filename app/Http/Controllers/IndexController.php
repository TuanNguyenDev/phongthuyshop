<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TrinhChieu;
use Log;
use DB;
class IndexController extends Controller
{
    public function getIndex(){
    	$slide_first = TrinhChieu::first();
    	$slides = TrinhChieu::where('id','<>',$slide_first->id)->get();
    	return view('user.index',compact('slides','slide_first'));
    }
}
