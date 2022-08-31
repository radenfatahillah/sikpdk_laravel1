<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanFormalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_formal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgpendidikanformal_id');
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['Terakreditasi', 'Terdaftar'])->nullable();
            $table->string('pemerintah')->nullable();
            $table->string('swasta')->nullable();
            $table->string('desa')->nullable();
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->timestamps();
        });

        Schema::table('pendidikan_formal', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgpendidikanformal_id')->references('id')->on('kg_pendidikan_formal')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_formal');
    }
}
