<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    protected $table = 'categories';

    public function Product(){
    	return $this->hasMany('App\Models\Product','id_danh_muc','id');
    }
    public function getProduct($limit=12){
    	$product = Product::where('id_danh_muc', $this->id)->limit($limit)->get();
    	return $product;

    }
}
