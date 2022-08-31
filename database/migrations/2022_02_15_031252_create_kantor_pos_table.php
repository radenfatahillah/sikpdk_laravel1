<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantorPosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantor_pos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgkantorpos_id');
            $table->integer('jumlah')->nullable();
            $table->timestamps();
        });

        Schema::table('kantor_pos', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgkantorpos_id')->references('id')->on('kg_kantor_pos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantor_pos');
    }
}
