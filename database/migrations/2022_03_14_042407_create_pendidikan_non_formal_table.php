<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanNonFormalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_non_formal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgpendidikannonformal_id');
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['Terakreditasi', 'Terdaftar'])->nullable();
            $table->enum('kepemilikan', ['Pemerintah', 'Yayasan', 'Dll'])->nullable();
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->timestamps();
        });

        Schema::table('pendidikan_non_formal', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgpendidikannonformal_id')->references('id')->on('kg_pendidikan_non_formal')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_non_formal');
    }
}
