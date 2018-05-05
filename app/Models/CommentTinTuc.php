<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentTinTuc extends Model
{
    protected $table = 'comment_tin_tuc';
    public $fillable = ['id_khach','noi_dung', 'id_tin_tuc'];
}
