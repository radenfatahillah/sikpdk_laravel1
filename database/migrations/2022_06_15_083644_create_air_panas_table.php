<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirPanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_panas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgairpanas_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('manfaat', ['Wisata', 'Pengobatan Energi', 'Dll'])->nullable();
            $table->integer('pemerintah')->nullable();
            $table->integer('swasta')->nullable();
            $table->integer('perorangan')->nullable();
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
        Schema::dropIfExists('air_panas');
    }
}
