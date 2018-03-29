<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anhtour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anhtour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tour')->unsigned();
            $table->foreign('id_tour')->references('id')->on('tour');
            
            $table->string('bg1',255);
            $table->string('bg2',255);
            $table->string('bg3',255);
            $table->string('bg4',255);
            $table->string('thumn1',255);
            $table->string('thumn2',255);
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
        Schema::dropIfExists('anhtour');
    }
}
