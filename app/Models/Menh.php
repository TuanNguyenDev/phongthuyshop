<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Menh extends Model
{
    protected $table = 'menh';
    public $entityType = ENTITY_TYPE_MENH;
    public $fillable = ['ten_menh','mo_ta','nguoi_tao'];

    public function Product(){
    	return $this->hasMany('App\Models\Product','id_menh','id');
    }
}
