<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CeateTableKhuyenmai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyen_mai', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_san_pham');
            $table->string('noi_dung');
            $table->string('anh',500);
            $table->integer('chiet_khau');
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->integer('sl_ban');
            $table->integer('id_chi_nhanh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
