<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUmumKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_umum_kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->nullable();
            $table->text('tipologi')->nullable();
            $table->integer('ketinggian')->nullable();
            $table->double('luas_wilayah')->nullable();
            $table->string('bts_wil_utara')->nullable();
            $table->string('bts_wil_timur')->nullable();
            $table->string('bts_wil_selatan')->nullable();
            $table->string('bts_wil_barat')->nullable();
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
        Schema::dropIfExists('data_umum_kecamatan');
    }
}
