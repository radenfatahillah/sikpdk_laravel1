<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePindahKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_skpwni');
            $table->unsignedBigInteger('desa_id');
            $table->bigInteger('NIK');
            $table->integer('klasifikasipindah_id');
            $table->string('alamat_sekarang');
            $table->date('tanggal');
            $table->timestamps();
        });

        Schema::table('pindah_keluar', function (Blueprint $table) {
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
        Schema::dropIfExists('pindah_keluar');
    }
}
