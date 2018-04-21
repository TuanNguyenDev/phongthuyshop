<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanHoi extends Model
{
    protected $table = 'phan_hoi';
    public $fillable = ['ten','sdt','email','noi_dung'];
}
