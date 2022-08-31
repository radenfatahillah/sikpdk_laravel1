<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetersediaanLahanTernakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketersediaan_lahan_ternak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('milik_masyarakat_ternak')->nullable();
            $table->integer('milik_perusahaan_ternak')->nullable();
            $table->integer('milik_perorangan_ternak')->nullable();
            $table->integer('sewa_pakai_ternak')->nullable();
            $table->integer('milik_pemerintah_ternak')->nullable();
            $table->integer('milik_masyarakat_adat_ternak')->nullable();
            $table->integer('lainnya_sedia_lahan_ternak')->nullable();
            $table->timestamps();
        });

        Schema::table('ketersediaan_lahan_ternak', function (Blueprint $table) {
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
        Schema::dropIfExists('ketersediaan_lahan_ternak');
    }
}
