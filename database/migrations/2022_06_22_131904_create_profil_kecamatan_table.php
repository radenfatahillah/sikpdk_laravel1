<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kec')->nullable();
            $table->char('provinsi_id')->nullable();
            $table->char('kabupaten_id')->nullable();
            $table->char('kecamatan_id')->nullable();
            $table->string('provinsi_nama')->nullable();
            $table->string('kabupaten_nama')->nullable();
            $table->string('kecamatan_nama')->nullable();
            $table->string('alamat')->nullable();
            $table->char('kode_pos')->nullable();
            $table->char('telepon')->nullable();
            $table->string('email')->nullable();
            $table->integer('tahun_pembentukan')->nullable();
            $table->string('dasar_pembentukan')->nullable();
            $table->string('nama_camat')->nullable();
            $table->string('sekretaris_camat')->nullable();
            $table->string('kepsek_pemerintahan_umum')->nullable();
            $table->string('kepsek_kesejahteraan_masyarakat')->nullable();
            $table->string('kepsek_pemberdayaan_masyarakat')->nullable();
            $table->string('kepsek_pelayanan_umum')->nullable();
            $table->string('kepsek_trantib')->nullable();
            $table->string('file_struktur_organisasi')->nullable();
            $table->string('file_logo')->nullable();
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
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
        Schema::dropIfExists('profil_kecamatan');
    }
}
