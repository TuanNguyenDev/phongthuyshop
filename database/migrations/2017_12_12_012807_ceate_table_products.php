<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CeateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham');
            $table->float('size');
            $table->integer('gia');
            $table->string('trong_luong');
            $table->string('mau_sac');
            $table->integer('id_menh');
            $table->integer('id_danh_muc');
            $table->integer('so_luong');
            $table->string('chat_lieu');
            $table->string('y_nghia');
            $table->text('mo_ta');
            $table->integer('trang_thai');
            $table->string('anh', 500);
            $table->string('kich_thuoc');
            $table->integer('gia_nhap');
            $table->integer('nguoi_tao');
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
