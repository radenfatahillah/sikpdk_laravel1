<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaLembagaKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_lembaga_keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgjasalembagakeuangan_id');
            $table->integer('jumlah')->nullable();
            $table->integer('kegiatan')->nullable();
            $table->integer('pengurus')->nullable();
            $table->timestamps();
        });

        Schema::table('jasa_lembaga_keuangan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgjasalembagakeuangan_id')->references('id')->on('kg_jasa_lembaga_keuangan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa_lembaga_keuangan');
    }
}
