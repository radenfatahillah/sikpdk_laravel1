<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranPanganBuahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_pangan_buah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('jual_konsumen_pangan_buah')->nullable();
            $table->integer('jual_pasar_pangan_buah')->nullable();
            $table->integer('jual_kud_pangan_buah')->nullable();
            $table->integer('jual_tengkulak_pangan_buah')->nullable();
            $table->integer('jual_pengecer_pangan_buah')->nullable();
            $table->integer('jual_lumbung_pangan_buah')->nullable();
            $table->integer('tidak_jual_pangan_buah')->nullable();
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
        Schema::dropIfExists('pemasaran_pangan_buah');
    }
}
