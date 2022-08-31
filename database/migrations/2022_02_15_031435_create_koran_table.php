<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kgkoran_id');
            $table->enum('status', ['Ada', 'Tidak Ada'])->nullable();
            $table->timestamps();
        });

        Schema::table('koran', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kgkoran_id')->references('id')->on('kg_koran')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koran');
    }
}
