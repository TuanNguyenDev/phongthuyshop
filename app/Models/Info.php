<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';
    public $fillable = ['tieu_de','noi_dung', 'updated_by'];
}
