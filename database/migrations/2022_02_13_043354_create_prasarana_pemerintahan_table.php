<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaPemerintahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_pemerintahan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->enum('gedung_kantor_desa', ['Ada', 'Tidak'])->nullable();
            $table->enum('kondisi_gedung_kantor_desa', ['Baik', 'Rusak'])->nullable();
            $table->integer('jumlah_ruang_kerja_desa')->nullable();
            $table->enum('balai_desa', ['Ada', 'Tidak'])->nullable();
            $table->enum('listrik_desa', ['Ada', 'Tidak'])->nullable();
            $table->enum('air_bersih_desa', ['Ada - Baik', 'Ada - Rusak', 'Tidak'])->nullable();
            $table->enum('telepon_desa', ['Ada', 'Tidak'])->nullable();
            $table->enum('rumah_dinas_kepala_desa', ['Ada', 'Tidak'])->nullable();
            $table->enum('rumah_dinas_perangkat_desa', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_mesin_tik_desa')->nullable();
            $table->integer('jumlah_meja_desa')->nullable();
            $table->integer('jumlah_kursi_desa')->nullable();
            $table->integer('jumlah_almari_arsip_desa')->nullable();
            $table->integer('komputer_desa')->nullable();
            $table->integer('mesin_fax_desa')->nullable();
            $table->integer('kendaraan_dinas_desa')->nullable();
            $table->enum('buku_data_peraturan_desa', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_keputusan_kepala_desa', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_administrasi_kependudukan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_inventaris', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_aparat', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_tanah_desa', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_administrasi_pajak', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_tanah', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_laporan_pengaduan_masyarakat', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_agenda_ekspedisi', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_profil_desa', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_induk_kependudukan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_mutasi_penduduk', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_rekap_jumlah_pdk_akhirbulan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_registrasi_pelayanan_penduduk', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_penduduk_sementara', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_anggaran_penerimaan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_anggaran_pengeluaran_pegawai', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_kas_umum_desa', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_kas_pembantu_penerimaan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_kas_pembantu_pengeluaran_rutin', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->enum('buku_data_lembaga_kemasyarakatan', ['Ada - Terisi', 'Ada - Tidak Terisi', 'Tidak'])->nullable();
            $table->timestamps();
        });

        Schema::table('prasarana_pemerintahan', function (Blueprint $table) {
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
        Schema::dropIfExists('prasarana_pemerintahan');
    }
}
