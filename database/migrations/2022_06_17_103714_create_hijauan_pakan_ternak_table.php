<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijauanPakanTernakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijauan_pakan_ternak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('ls_tanaman_pakan_ternak')->nullable();
            $table->integer('produksi_hijauan_pakan_ternak')->nullable();
            $table->integer('ls_lahan_gembalaan')->nullable();
            $table->integer('pasok_dari_luardesa')->nullable();
            $table->integer('subsidi_dinas')->nullable();
            $table->integer('lainnya_ketersediaan_hijauan')->nullable();
            $table->timestamps();
        });

        Schema::table('hijauan_pakan_ternak', function (Blueprint $table) {
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
        Schema::dropIfExists('hijauan_pakan_ternak');
    }
}
