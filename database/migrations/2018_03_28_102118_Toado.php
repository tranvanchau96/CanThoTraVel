<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Toado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('toado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tour')->unsigned();
            $table->integer('id_gmaps')->unsigned();
            $table->foreign('id_tour')->references('id')->on('tour');
            $table->foreign('id_gmaps')->references('id')->on('gmaps_geocache');
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
        Schema::dropIfExists('toado');
    }
}
