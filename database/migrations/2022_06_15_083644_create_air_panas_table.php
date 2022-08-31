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
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgairpanas_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('manfaat', ['Wisata', 'Pengobatan Energi', 'Dll'])->nullable();
            $table->integer('pemerintah')->nullable();
            $table->integer('swasta')->nullable();
            $table->integer('perorangan')->nullable();
            $table->timestamps();
        });

        Schema::table('air_panas', function (Blueprint $table) {
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
        Schema::dropIfExists('air_panas');
    }
}
