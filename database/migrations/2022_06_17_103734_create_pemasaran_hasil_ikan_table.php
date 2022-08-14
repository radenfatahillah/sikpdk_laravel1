<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranHasilIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasaran_hasil_ikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('jual_konsumen_perikanan')->nullable();
            $table->integer('jual_pasar_perikanan')->nullable();
            $table->integer('jual_kud_perikanan')->nullable();
            $table->integer('jual_tengkulak_perikanan')->nullable();
            $table->integer('jual_pengecer_perikanan')->nullable();
            $table->integer('jual_lumbung_perikanan')->nullable();
            $table->integer('tidak_jual_perikanan')->nullable();
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
        Schema::dropIfExists('pemasaran_hasil_ikan');
    }
}
