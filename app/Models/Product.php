<?php

namespace App\Models;
use App\Models\KhuyenMai;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function getKM(){
    	$KM = KhuyenMai::where('id_san_pham',$this->id)->get();
    	return $KM;

    }
}
