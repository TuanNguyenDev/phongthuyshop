<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = 'khuyen_mai';
    public $fillable = ['noi_dung','ngay_bat_dau','ngay_ket_thuc','nguoi_tao','so_luong','chiet_khau'];
}
