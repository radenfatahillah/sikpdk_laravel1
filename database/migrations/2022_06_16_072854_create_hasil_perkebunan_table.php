<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPerkebunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_perkebunan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kghasilperkebunan_id');
            $table->integer('luasnegara')->nullable();
            $table->integer('hasilnegara')->nullable();
            $table->integer('luasrakyat')->nullable();
            $table->integer('hasilrakyat')->nullable();
            $table->timestamps();
        });

        Schema::table('hasil_perkebunan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kghasilperkebunan_id')->references('id')->on('kg_hasil_perkebunan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_perkebunan');
    }
}
