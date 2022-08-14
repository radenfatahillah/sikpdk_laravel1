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
            $table->integer('jeniskelamin_id')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->integer('agama_id')->nullable();
            $table->integer('pendidikan_kk_id')->nullable();
            $table->integer('pendidikan_sedang_id')->nullable();
            $table->integer('etnis_id')->nullable();
            $table->integer('penyandangcacat_id')->nullable();
            $table->integer('jenispekerjaan_id')->nullable();
            $table->integer('golongandarah_id')->nullable();
            $table->integer('statusperkawinan_id')->nullable();
            $table->integer('shdk_id')->nullable();
            $table->integer('kewarganegaraan_id')->nullable();
            $table->string('no_paspor')->nullable();
            $table->string('no_kitap')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->integer('alamat_id')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('desa_id')->nullable();
            $table->integer('ktpel_id')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('data_penduduk');
    }
}
