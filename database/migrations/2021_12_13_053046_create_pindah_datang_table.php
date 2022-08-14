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
            $table->increments('id');
            $table->string('no_skpwni');
            $table->bigInteger('NOKK_asal');
            $table->string('nama_KK_asal');
            $table->bigInteger('NIK');
            $table->string('name')->nullable();
            $table->integer('jeniskelamin_id')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->integer('agama_id')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->integer('alamat_id')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->integer('desa_id')->nullable();
            $table->string('alamat_asal');
            $table->integer('klasifikasipindah_id');
            $table->date('tanggal');
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
        Schema::dropIfExists('pindah_datang');
    }
}
