<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diemdi')->unsigned();
            $table->integer('id_khachsan')->unsigned();
            $table->integer('id_huongdanvien')->unsigned();
            $table->foreign('id_diemdi')->references('id')->on('diemdi');
            $table->foreign('id_khachsan')->references('id')->on('khachsan');
            $table->foreign('id_huongdanvien')->references('id')->on('huongdanvien');
            $table->string('tieude',255);
            $table->string('tieudekhongdau',255);
            $table->date('ngaykhoihanh');
            $table->time('giokhoihanh');
            $table->string('noikhoihanh',255);
            $table->time('giotaptrung',255);
            $table->string('songaydi',255);
            $table->integer('socho');
            $table->integer('sochoconlai');
            $table->text('gioithieu',64000);
            $table->text('lichtrinh',64000);
            $table->text('dieukhoan',64000);
            $table->integer('gianguoilon');
            $table->integer('giatreem');
            $table->integer('giatrenho');
            $table->integer('giaembe');
            $table->integer('giaphongdon');
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
        Schema::dropIfExists('tour');
    }
}
