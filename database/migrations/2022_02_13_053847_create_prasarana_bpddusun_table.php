<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaBPDDusunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_bpddusun', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->enum('gedung_kantor_bpd', ['Ada', 'Tidak'])->nullable();
            $table->enum('kondisi_gedung_kantor_bpd', ['Baik', 'Rusak'])->nullable();
            $table->integer('jumlah_ruang_kerja_bpd')->nullable();
            $table->enum('balai_bpd', ['Ada', 'Tidak'])->nullable();
            $table->enum('listrik_bpd', ['Ada', 'Tidak'])->nullable();
            $table->enum('air_bersih_bpd', ['Ada - Baik', 'Ada - Rusak', 'Tidak'])->nullable();
            $table->enum('telepon_bpd', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_mesin_tik_bpd')->nullable();
            $table->integer('jumlah_meja_bpd')->nullable();
            $table->integer('jumlah_kursi_bpd')->nullable();
            $table->integer('jumlah_almari_arsip_bpd')->nullable();
            $table->integer('komputer_bpd')->nullable();
            $table->integer('mesin_fax_bpd')->nullable();
            $table->enum('buku_adm_agt_bpd', ['Ada ', 'Tidak'])->nullable();
            $table->integer('buku_adm_kgt_bpd')->nullable();
            $table->enum('buku_kgt_bpd', ['Ada ', 'Tidak'])->nullable();
            $table->enum('buku_perda_bpd', ['Ada ', 'Tidak'])->nullable();
            $table->enum('gedung_kantor_dusun', ['Ada ', 'Tidak'])->nullable();
            $table->enum('atk_dusun', ['Ada ', 'Tidak'])->nullable();
            $table->enum('barang_inventaris_dusun', ['Ada ', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_dusun')->nullable();
            $table->integer('jenis_kegiatan_dusun')->nullable();
            $table->integer('jumlah_pengurus_dusun')->nullable();
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
        Schema::dropIfExists('prasarana_bpddusun');
    }
}
