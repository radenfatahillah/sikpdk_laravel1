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
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgbahangalian_id')->nullable();
            $table->enum('keberadaan', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('skalaproduksi', ['Besar', 'Sedang', 'Kecil'])->nullable();
            $table->enum('kepemilikan', ['Pemerintah', 'Swasta', 'Perorangan', 'Adat', 'Lain-lain'])->nullable();
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
        Schema::dropIfExists('bahan_galian');
    }
}
