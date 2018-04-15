<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dattour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dattour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tour')->unsigned();
            $table->foreign('id_tour')->references('id')->on('tour');
            
            $table->string('hoten',30);
            $table->string('diachi',255);
            $table->string('sodienthoai',255);
            $table->string('email',30);
            $table->date('ngaydat');
            $table->text('ghichu',64000)->nullable();
            $table->integer('nguoilon');
            $table->integer('treem');
            $table->integer('trenho');
            $table->integer('embe');
            $table->integer('phongdon');
            $table->integer('tongcho');
            $table->integer('tongtien');
            $table->string('hinhthucthanhtoan',255);
            $table->string('trangthaithanhtoan',255);
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
        Schema::dropIfExists('dattour');
    }
}
