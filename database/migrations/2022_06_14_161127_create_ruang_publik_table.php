<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangPublikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_publik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgruangpublik_id')->nullable();
            $table->enum('keberadaan', ['Ada', 'Tidak Ada'])->nullable();
            $table->integer('luas')->nullable();
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->nullable();
            $table->timestamps();
        });

        Schema::table('ruang_publik', function (Blueprint $table) {
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
        Schema::dropIfExists('ruang_publik');
    }
}
