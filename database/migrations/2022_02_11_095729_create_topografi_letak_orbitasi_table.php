<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopografiLetakOrbitasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topografi_letak_orbitasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->float('daratan_rendah', 5, 2)->nullable();
            $table->float('berbukit_bukit', 5, 2)->nullable();
            $table->float('daratan_tinggi', 5, 2)->nullable();
            $table->float('lereng_gunung', 5, 2)->nullable();
            $table->float('tepi_pantai', 5, 2)->nullable();
            $table->float('kawasan_rawa', 5, 2)->nullable();
            $table->float('kawasan_gambut', 5, 2)->nullable();
            $table->float('aliran_sungai', 5, 2)->nullable();
            $table->float('bantaran_sungai', 5, 2)->nullable();
            $table->float('kawasan_perkantoran', 5, 2)->nullable();
            $table->float('kawasan_pertokoan', 5, 2)->nullable();
            $table->float('kawasan_campuran', 5, 2)->nullable();
            $table->float('kawasan_industri', 5, 2)->nullable();
            $table->float('kepulauan', 5, 2)->nullable();
            $table->float('pantai_pesisir', 5, 2)->nullable();
            $table->float('kawasan_hutan', 5, 2)->nullable();
            $table->float('taman_suaka', 5, 2)->nullable();
            $table->float('kawasan_wisata', 5, 2)->nullable();
            $table->float('batas_negara_lain', 5, 2)->nullable();
            $table->float('batas_provinsi_lain', 5, 2)->nullable();
            $table->float('batas_kabupaten_lain', 5, 2)->nullable();
            $table->float('batas_antar_kecamatan', 5, 2)->nullable();
            $table->float('das_bantaransungai', 5, 2)->nullable();
            $table->float('rawan_banjir', 5, 2)->nullable();
            $table->float('bebas_banjir', 5, 2)->nullable();
            $table->float('potensial_tsunami', 5, 2)->nullable();
            $table->float('rawan_jalur_gempa', 5, 2)->nullable();
            $table->float('jarak_kecamatan', 5, 2)->nullable();
            $table->float('waktu_kecamatan_motor', 5, 2)->nullable();
            $table->float('waktu_kecamatan_nonmotor', 5, 2)->nullable();
            $table->float('jumlah_kendaraanumum_kecamatan', 5, 2)->nullable();
            $table->float('jarak_kabupaten', 5, 2)->nullable();
            $table->float('waktu_kabupaten_motor', 5, 2)->nullable();
            $table->float('waktu_kabupaten_nonmotor', 5, 2)->nullable();
            $table->float('jumlah_kendaraanumum_kabupaten', 5, 2)->nullable();
            $table->float('jarak_provinsi', 5, 2)->nullable();
            $table->float('waktu_provinsi_motor', 5, 2)->nullable();
            $table->float('waktu_provinsi_nonmotor', 5, 2)->nullable();
            $table->float('jumlah_kendaraanumum_provinsi', 5, 2)->nullable();
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
        Schema::dropIfExists('topografi_letak_orbitasi');
    }
}
