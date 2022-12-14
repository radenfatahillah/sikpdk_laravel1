<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranHasilPerkebunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_hasil_perkebunan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('jual_konsumen_kebun')->nullable();
            $table->integer('jual_pasar_kebun')->nullable();
            $table->integer('jual_kud_kebun')->nullable();
            $table->integer('jual_tengkulak_kebun')->nullable();
            $table->integer('jual_pengecer_kebun')->nullable();
            $table->integer('jual_lumbung_kebun')->nullable();
            $table->integer('tidak_jual_kebun')->nullable();
            $table->timestamps();
        });

        Schema::table('pemasaran_hasil_perkebunan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasaran_hasil_perkebunan');
    }
}
