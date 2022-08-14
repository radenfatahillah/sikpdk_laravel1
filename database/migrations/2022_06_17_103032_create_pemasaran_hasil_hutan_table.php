<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranHasilHutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_hasil_hutan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('jual_konsumen_hutan')->nullable();
            $table->integer('jual_pasar_hutan')->nullable();
            $table->integer('jual_kud_hutan')->nullable();
            $table->integer('jual_tengkulak_hutan')->nullable();
            $table->integer('jual_pengecer_hutan')->nullable();
            $table->integer('jual_lumbung_hutan')->nullable();
            $table->integer('tidak_jual_hutan')->nullable();
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
        Schema::dropIfExists('pemasaran_hasil_hutan');
    }
}
