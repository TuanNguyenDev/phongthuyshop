<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tin_tuc';
    public $fillable = ['tieu_de','noi_dung', 'description'];
    public $entityType = ENTITY_TYPE_NEW;

}
