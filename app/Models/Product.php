<?php

namespace App\Models;
use App\Models\KhuyenMai;
use App\Models\Menh;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $entityType = ENTITY_TYPE_PRODUCT;
    public $fillable = ['ten_san_pham','size','gia','trong_luong','mau_sac','id_menh','id_danh_muc','so_luong','chat_lieu','kich_thuoc','gia_nhap','nguoi_tao'];
    public function getKM(){
    	$KM = KhuyenMai::where('id_san_pham',$this->id)->get();
    	return $KM;
    }
    public function Menh(){
    	$menh = Menh::find($this->id_menh);
        return $menh;
        //return $this->belongsTo("App\Models\Menh", 'id_menh');
    }
    public function Category(){
    	$cate = Category::find($this->id_danh_muc);
        return $cate;
        // return $this->belongsTo('App\Models\Category','id_danh_muc');
    }
    public function getSlug(){
        $slug = Slug::where(['entity_type' => $this->entityType, 'entity_id' => $this->id])->first();
        if($slug){
            return $slug->slug;
        }else{
            return null;
        }
    }
}
