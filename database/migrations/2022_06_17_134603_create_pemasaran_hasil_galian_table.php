<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranHasilGalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_hasil_galian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('jual_konsumen_galian')->nullable();
            $table->integer('jual_pasar_galian')->nullable();
            $table->integer('jual_kud_galian')->nullable();
            $table->integer('jual_tengkulak_galian')->nullable();
            $table->integer('jual_pengecer_galian')->nullable();
            $table->integer('jual_perusahaan_galian')->nullable();
            $table->integer('jual_lumbung_galian')->nullable();
            $table->integer('tidak_jual_galian')->nullable();
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
        Schema::dropIfExists('pemasaran_hasil_galian');
    }
}
