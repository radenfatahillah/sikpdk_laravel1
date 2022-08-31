<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranHasilTernakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_hasil_ternak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('jual_konsumen_ternak')->nullable();
            $table->integer('jual_pasar_ternak')->nullable();
            $table->integer('jual_kud_ternak')->nullable();
            $table->integer('jual_tengkulak_ternak')->nullable();
            $table->integer('jual_pengecer_ternak')->nullable();
            $table->integer('jual_lumbung_ternak')->nullable();
            $table->integer('tidak_jual_ternak')->nullable();
            $table->timestamps();
        });

        Schema::table('pemasaran_hasil_ternak', function (Blueprint $table) {
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
        Schema::dropIfExists('pemasaran_hasil_ternak');
    }
}
