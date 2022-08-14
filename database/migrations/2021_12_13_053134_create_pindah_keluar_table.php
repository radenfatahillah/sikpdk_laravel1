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
            $table->increments('id');
            $table->string('no_skpwni');
            $table->integer('desa_id')->nullable();
            $table->bigInteger('NIK');
            $table->integer('klasifikasipindah_id');
            $table->string('alamat_sekarang');
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
        Schema::dropIfExists('pindah_keluar');
    }
}
