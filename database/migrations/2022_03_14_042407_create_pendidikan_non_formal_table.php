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
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgpendidikannonformal_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['Terakreditasi', 'Terdaftar'])->nullable();
            $table->enum('kepemilikan', ['Pemerintah', 'Yayasan', 'Dll'])->nullable();
            $table->integer('jumlah_pengajar')->nullable();
            $table->integer('jumlah_siswa')->nullable();
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
        Schema::dropIfExists('pendidikan_non_formal');
    }
}
