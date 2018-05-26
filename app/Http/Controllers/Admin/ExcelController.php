<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Input;
use DB;
use Excel;
class ExcelController extends Controller
{
    public function getImport(){
    	return view('admin.excel.importProduct');
    }
    public function getExport(){
    	$product = Product::all();
    	Excel::create('Export Product', function($excel) use ($product){
    		$excel->sheet('Sheet 1', function($sheet) use($product){
    			$sheet->fromArray($product);
    		});
    	})->export('xlsx');    	
    }
    public function postImport(){
    	Excel::load(Input::file('product'), function($reader){
    		$reader->each(function($sheet){
    			Product::firstOrCreate($sheet->toArray());
    		});
    	});
    	return redirect(route('product.list'));
    }
}
