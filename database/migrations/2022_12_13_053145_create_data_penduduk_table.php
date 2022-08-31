<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->bigIncrements('NIK')->unique()->nullable();
            $table->bigInteger('NOKK')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('jeniskelamin_id');
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->unsignedBigInteger('agama_id');
            $table->unsignedBigInteger('pendidikan_kk_id');
            $table->unsignedBigInteger('pendidikan_sedang_id');
            $table->unsignedBigInteger('etnis_id');
            $table->unsignedBigInteger('penyandangcacat_id');
            $table->unsignedBigInteger('jenispekerjaan_id');
            $table->unsignedBigInteger('golongandarah_id');
            $table->unsignedBigInteger('statusperkawinan_id');
            $table->unsignedBigInteger('shdk_id');
            $table->unsignedBigInteger('kewarganegaraan_id');
            $table->string('no_paspor')->nullable();
            $table->string('no_kitap')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->unsignedBigInteger('alamat_id');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('ktpel_id');
            $table->integer('status')->nullable();
            $table->timestamps();
        });

        Schema::table('data_penduduk', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jeniskelamin_id')->references('id')->on('jenis_kelamin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pendidikan_kk_id')->references('id')->on('pendidikan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pendidikan_sedang_id')->references('id')->on('pendidikan_sedang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('etnis_id')->references('id')->on('etnis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('penyandangcacat_id')->references('id')->on('penyandang_cacat')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jenispekerjaan_id')->references('id')->on('jenis_pekerjaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('golongandarah_id')->references('id')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('statusperkawinan_id')->references('id')->on('status_perkawinan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('shdk_id')->references('id')->on('shdk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kewarganegaraan_id')->references('id')->on('kewarganegaraan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alamat_id')->references('id')->on('alamat')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ktpel_id')->references('id')->on('ktpel')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
