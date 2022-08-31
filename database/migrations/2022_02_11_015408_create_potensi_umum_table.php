<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potensi_umum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->string('batas_utara_desa')->nullable();
            $table->string('batas_utara_kec')->nullable();
            $table->string('batas_selatan_desa')->nullable();
            $table->string('batas_selatan_kec')->nullable();
            $table->string('batas_timur_desa')->nullable();
            $table->string('batas_timur_kec')->nullable();
            $table->string('batas_barat_desa')->nullable();
            $table->string('batas_barat_kec')->nullable();
            $table->enum('penetapan_batas', ['Sudah Ada', 'Belum Ada'])->nullable();
            $table->enum('peta_wilayah', ['Ada', 'Tidak Ada'])->nullable();
            $table->string('perdes_no')->nullable();
            $table->string('perda_no')->nullable();
            $table->timestamps();
        });

        Schema::table('potensi_umum', function (Blueprint $table) {
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
        Schema::dropIfExists('potensi_umum');
    }
}
