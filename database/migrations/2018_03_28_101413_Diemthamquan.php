<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diemthamquan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('diemthamquan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten',255);
            $table->string('tenkhongdau',255);
            $table->text('gioithieu',64000);
            $table->text('text1',64000);
            $table->text('text2',64000);
            $table->text('text3',64000);
            $table->text('text4',64000);
            $table->string('background',255);
            $table->string('headerxua',255);
            $table->string('xua1img600x391',255);
            $table->string('xua2img710x391',255);
            $table->string('xua3img600x253',255);
            $table->string('headernay',255);
            $table->string('naybgimg1366x160',255);
            $table->string('nay1img668x',255);
            $table->string('nay2img668x',255);
            $table->string('nay3img668x',255);
            $table->string('nay4img668x',255);
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
        Schema::dropIfExists('diemthamquan');
    }
}
