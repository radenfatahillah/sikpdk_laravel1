<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaDaratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_darat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgprasaranadarat_id');
            $table->unsignedBigInteger('kgdarat_id');
            $table->integer('baik')->nullable();
            $table->integer('rusak')->nullable();
            $table->timestamps();
        });

        Schema::table('prasarana_darat', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgprasaranadarat_id')->references('id')->on('kg_prasarana_darat')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgdarat_id')->references('id')->on('kategori_darat')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prasarana_darat');
    }
}
