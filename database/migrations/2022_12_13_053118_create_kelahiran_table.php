<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NOKK')->nullable();
            $table->string('nama_KK')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('jeniskelamin_id');
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->unsignedBigInteger('golongandarah_id');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->unsignedBigInteger('alamat_id');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('desa_id');
            $table->timestamps();
        });

        Schema::table('kelahiran', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jeniskelamin_id')->references('id')->on('jenis_kelamin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('golongandarah_id')->references('id')->on('golongan_darah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alamat_id')->references('id')->on('alamat')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelahiran');
    }
}
