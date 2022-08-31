<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePindahDatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_datang', function (Blueprint $table) {
            $table->id();
            $table->string('no_skpwni');
            $table->bigInteger('NOKK_asal');
            $table->string('nama_KK_asal');
            $table->bigInteger('NIK');
            $table->string('name')->nullable();
            $table->unsignedBigInteger('jeniskelamin_id');
            $table->string('tempatlahir')->nullable();
            $table->unsignedBigInteger('agama_id');
            $table->date('tanggallahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->unsignedBigInteger('alamat_id');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('desa_id');
            $table->string('alamat_asal');
            $table->unsignedBigInteger('klasifikasipindah_id');
            $table->date('tanggal');
            $table->timestamps();
        });

        Schema::table('pindah_datang', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('klasifikasipindah_id')->references('id')->on('klasifikasi_pindah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jeniskelamin_id')->references('id')->on('jenis_kelamin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alamat_id')->references('id')->on('alamat')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pindah_datang');
    }
}
