<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CeateTableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('bills', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('phuong_thuc_thanh_toan');
        //     $table->integer('tong_tien');
        //     $table->string('ghi_chu');
        //     $table->integer('id_khach_hang');
        //     $table->string('trang_thai');
        //     $table->integer('chiet_khau');
        //     $table->string('maKM');
        //     $table->integer('nguoi_lap');
        //     $table->string('dia_chi');
        //     $table->integer('tien_thanh_toan');
        //     $table->timestamps();
        // });
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
