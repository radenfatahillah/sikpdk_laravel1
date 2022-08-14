<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('luas_rawa')->nullable();
            $table->enum('perikanandarat_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('airbakuolah_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('cucimandi_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('irigasi_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('bab_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('perikanan_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('sayuran_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('mangrove_rawa', ['Ya', 'Tidak'])->nullable();
            $table->enum('lain_rawa', ['Ya', 'Tidak'])->nullable();
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
        Schema::dropIfExists('rawa');
    }
}
