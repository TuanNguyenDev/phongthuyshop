<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Slug;
class Category extends Model
{
    protected $table = "categories";
    public $entityType = ENTITY_TYPE_TYPE;
    public $fillable = ['ten_danh_muc','mo_ta'];

    public function Product(){
    	return $this->hasMany('App\Models\Product','id_danh_muc','id');
    }
    public function getProduct($limit=12){
    	$product = Product::where('id_danh_muc', $this->id)->limit($limit)->get();
    	return $product;

    }
    public function getSlug(){
    	$slug = Slug::where([
    		'entity_type' => $this->entityType,
    		"entity_id" => $this->id
    	])->first();
    	if($slug){
    		return $slug->slug;
    	}else{
    		return null;
    	}
    }
}
