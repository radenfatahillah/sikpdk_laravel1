<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaKeamananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_keamanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->enum('keberadaanhansip', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_anggota_hansip')->nullable();
            $table->integer('jumlah_anggota_satgas_linmas')->nullable();
            $table->enum('pelaksanaan_siskamling', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_poskamling')->nullable();
            $table->enum('keberadaan_satpam_swakarsa', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_anggota_satpam')->nullable();
            $table->string('nama_organisasi_induk')->nullable();
            $table->enum('pemilik_organisasi_swakarsa', ['Pemerintah', 'Swasta', 'Perorangan'])->nullable();
            $table->enum('keberadaan_organisasi_keamanan', ['Ada', 'Tidak'])->nullable();
            $table->enum('mitra_koramil_tni', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_anggota_trantiblinmas')->nullable();
            $table->integer('jumlah_kegiatan_trantiblinmas')->nullable();
            $table->enum('babinkamtibmas', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_anggota_babinkamtibmas')->nullable();
            $table->integer('jumlah_kegiatan_babinkamtibmas')->nullable();
            $table->timestamps();
        });

        Schema::table('lembaga_keamanan', function (Blueprint $table) {
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
        Schema::dropIfExists('lembaga_keamanan');
    }
}
