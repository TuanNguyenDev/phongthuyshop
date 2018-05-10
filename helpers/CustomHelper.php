<?php 
use App\Admin;
use App\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Menh;
define('ROLE_STAFF', 100);
define('ROLE_MOD', 500);
define('ROLE_ADMIN', 900);

/*
Slug constant
 */
define('ENTITY_TYPE_TYPE', 100);
define('ENTITY_TYPE_PRODUCT', 500);
define('ENTITY_TYPE_MENH', 600);
define('ENTITY_TYPE_NEW', 700);

if(!function_exists('slug_generate')){

  function slug_generate($name) {
      $slug = null;
      $slug = str_slug(trim($name), '-');
      $slug .= "-" . date('YmdHis', time());
      return $slug;
  
}

}
if(!function_exists('get_admin_name')){
	function get_admin_name($id){
		$admin = Admin::find($id);
		if(!$admin){
			return "";
		}
		return $admin->name;
	}
}
if(!function_exists('get_customer_name')){
	function get_customer_name($id){
		$cus = User::find($id);
		if(!$cus){
			return "";
		}
		return $cus->name;
	}
}
if(!function_exists('get_product_name')){
	function get_product_name($id){
		$product = Product::find($id);
		if(!$product){
			return "";
		}
		return $product->ten_san_pham;
	}
}
if(!function_exists('get_cate_name')){
	function get_cate_name($id){
		$cate = Category::find($id);
		if(!$cate){
			return "";
		}
		return $cate->ten_danh_muc;
	}
}
if(!function_exists('get_menh_name')){
	function get_menh_name($id){
		$menh = Menh::find($id);
		if(!$menh){
			return "";
		}
		return $menh->ten_menh;
	}
}
if(!function_exists('get_product_price')){
	function get_product_price($id){
		$product = Product::find($id);
		if(!$product){
			return "";
		}
		return $product->gia;
	}
}
 ?>
