<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaAirBersihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_airbersih', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('jumlah_sumur_pompa')->nullable();
            $table->integer('jumlah_sumur_gali')->nullable();
            $table->integer('jumlah_hidran_umum')->nullable();
            $table->integer('jumlah_pah')->nullable();
            $table->integer('jumlah_tangki_air_bersih')->nullable();
            $table->integer('jumlah_embung')->nullable();
            $table->integer('jumlah_mataair')->nullable();
            $table->integer('jumlah_bangunan_olah_air')->nullable();
            $table->enum('saluran_drainase', ['Ada', 'Tidak'])->nullable();
            $table->integer('sumur_resapan_rt')->nullable();
            $table->integer('jumlah_mck_umum')->nullable();
            $table->integer('pemilik_jumlah_jamban')->nullable();
            $table->enum('kondisi_saluran_drainase', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
            $table->timestamps();
        });

        Schema::table('prasarana_airbersih', function (Blueprint $table) {
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
        Schema::dropIfExists('prasarana_airbersih');
    }
}
