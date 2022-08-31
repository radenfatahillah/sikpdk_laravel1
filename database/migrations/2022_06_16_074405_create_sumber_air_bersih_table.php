<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumberAirBersihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumber_air_bersih', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgsumberairbersih_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('kondisi')->nullable();
            $table->integer('pemanfaatan')->nullable();
            $table->enum('kualitas', ['Berbau', 'Berwarna', 'Berasa', 'Baik'])->nullable();
            $table->timestamps();
        });

        Schema::table('sumber_air_bersih', function (Blueprint $table) {
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
        Schema::dropIfExists('sumber_air_bersih');
    }
}
