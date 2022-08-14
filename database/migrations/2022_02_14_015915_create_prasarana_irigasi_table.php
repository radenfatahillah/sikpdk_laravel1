<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaIrigasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_irigasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('panjang_saluran_primer')->nullable();
            $table->integer('panjang_saluran_sekunder')->nullable();
            $table->integer('panjang_saluran_tersier')->nullable();
            $table->integer('jumlah_pintu_sadap')->nullable();
            $table->integer('jumlah_pintu_pembagi_air')->nullable();
            $table->enum('kondisi_saluran_primer', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
            $table->enum('kondisi_saluran_sekunder', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
            $table->enum('kondisi_saluran_tersier', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
            $table->enum('pintu_sadap', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
            $table->enum('pintu_pembagi_air', ['Baik', 'Rusak ', 'Mampet', 'Kurang Memadai'])->nullable();
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
        Schema::dropIfExists('prasarana_irigasi');
    }
}
