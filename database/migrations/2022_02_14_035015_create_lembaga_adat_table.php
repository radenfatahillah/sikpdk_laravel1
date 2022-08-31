<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaAdatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_adat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->enum('pemangkut_adat', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_adat', ['Ada', 'Tidak'])->nullable();
            $table->enum('rumah_adat', ['Ada', 'Tidak'])->nullable();
            $table->enum('barang_pusaka', ['Ada', 'Tidak'])->nullable();
            $table->enum('naskah_naskah', ['Ada', 'Tidak'])->nullable();
            $table->enum('musyawarah_adat', ['Ada', 'Tidak'])->nullable();
            $table->enum('sanksi_adat', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_perkawinan', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_kematian', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_kelahiran', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_cocok_tanam', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_bidang_perikanan', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_bidang_kehutanan', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_kelola_sda', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_dalam_bangun_rumah', ['Ada', 'Tidak'])->nullable();
            $table->enum('upacara_adat_penyelesaian_masalah', ['Ada', 'Tidak'])->nullable();
            $table->timestamps();
        });

        Schema::table('lembaga_adat', function (Blueprint $table) {
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
        Schema::dropIfExists('lembaga_adat');
    }
}
