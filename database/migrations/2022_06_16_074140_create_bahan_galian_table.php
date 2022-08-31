<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanGalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_galian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgbahangalian_id')->nullable();
            $table->enum('keberadaan', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('skalaproduksi', ['Besar', 'Sedang', 'Kecil'])->nullable();
            $table->enum('kepemilikan', ['Pemerintah', 'Swasta', 'Perorangan', 'Adat', 'Lain-lain'])->nullable();
            $table->timestamps();
        });

        Schema::table('bahan_galian', function (Blueprint $table) {
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
        Schema::dropIfExists('bahan_galian');
    }
}
