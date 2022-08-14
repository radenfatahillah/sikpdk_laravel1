<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomoditasBuahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditas_buah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgkomoditasbuah_id')->nullable();
            $table->integer('luas')->nullable();
            $table->integer('hasil')->nullable();
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
        Schema::dropIfExists('komoditas_buah');
    }
}