<?php 
define('ROLE_STAFF', 100);
define('ROLE_ADMIN', 900);

/*
Slug constant
 */
define('ENTITY_TYPE_TYPE', 100);
define('ENTITY_TYPE_PRODUCT', 500);
define('ENTITY_TYPE_MENH', 500);

if(!function_exists('slug_generate')){

  function slug_generate($name) {
      $slug = null;
      $slug = str_slug(trim($name), '-');
      $slug .= "-" . date('YmdHis', time());
      return $slug;
  }
}
 ?>