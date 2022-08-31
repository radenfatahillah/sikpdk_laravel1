<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanKeagamaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_keagamaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgpendidikankeagamaan_id')->nullable();
            $table->string('kategoripendidikan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['Terakreditasi', 'Terdaftar'])->nullable();
            $table->string('pemerintah')->nullable();
            $table->string('swasta')->nullable();
            $table->string('dll')->nullable();
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->timestamps();
        });

        Schema::table('pendidikan_keagamaan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgpendidikankeagamaan_id')->references('id')->on('kg_pendidikan_keagamaan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_keagamaan');
    }
}
