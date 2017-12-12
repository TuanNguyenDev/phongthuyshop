<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    public function BillDetail(){
    	return $this->belongTo('App\Models\BillDetail','id','id');
    }

    public function Customer(){
    	return $this->belongTo('App\Models\Customer','id_khach_hang','id');
    }

    public function GiaoHang(){
    	return $this->hasOne('App\Models\GiaoHang','id','id_don_hang');
    }
}
