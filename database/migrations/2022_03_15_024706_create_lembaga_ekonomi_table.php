<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaEkonomiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_ekonomi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kglembagaekonomi_id');
            $table->integer('jumlah')->nullable();
            $table->integer('kegiatan')->nullable();
            $table->integer('pengurus')->nullable();
            $table->timestamps();
        });

        Schema::table('lembaga_ekonomi', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kglembagaekonomi_id')->references('id')->on('kg_lembaga_ekonomi')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembaga_ekonomi');
    }
}
