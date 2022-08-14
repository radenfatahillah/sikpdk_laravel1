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
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgprasaranadarat_id')->nullable();
            $table->integer('kgdarat_id')->nullable();
            $table->integer('baik')->nullable();
            $table->integer('rusak')->nullable();
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
        Schema::dropIfExists('prasarana_darat');
    }
}