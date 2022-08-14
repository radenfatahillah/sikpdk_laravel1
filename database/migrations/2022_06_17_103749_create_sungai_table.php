<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSungaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sungai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('jumlah_sungai')->nullable();
            $table->enum('tercemar_sungai', ['Ya', 'Tidak'])->nullable();
            $table->enum('dangkal_sungai', ['Ya', 'Tidak'])->nullable();
            $table->enum('keruh_sungai', ['Ya', 'Tidak'])->nullable();
            $table->enum('jernih_sungai', ['Ya', 'Tidak'])->nullable();
            $table->enum('kurangbiota_sungai', ['Ya', 'Tidak'])->nullable();
            $table->enum('kering_sungai', ['Ya', 'Tidak'])->nullable();
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
        Schema::dropIfExists('sungai');
    }
}
