<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentSanPham extends Model
{
    protected $table = 'comment_san_pham';
    public $fillable = ['id_khach','noi_dung', 'id_san_pham'];
}
