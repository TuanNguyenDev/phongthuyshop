<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CeateTableGiaoHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_hang', function (Blueprint $table) {
            $table->integer('id_don_hang');
            $table->integer('id_don_vi_van_chuyen');
            $table->date('ngay_giao_hang');
            $table->integer('chi_phi');
            $table->string('trang_thai');
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
