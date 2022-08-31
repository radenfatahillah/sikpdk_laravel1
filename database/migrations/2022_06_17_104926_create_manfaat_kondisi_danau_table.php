<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManfaatKondisiDanauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manfaat_kondisi_danau', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('luas_danau')->nullable();
            $table->enum('perikanan_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('airminum_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('cucimandi_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('irigasi_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('bab_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('pembangkitlistrik_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('prasaranatransportasi_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('lainnya_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('tercemar_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('dangkal_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('keruh_danau', ['Ya', 'Tidak'])->nullable();
            $table->enum('berlumpur_danau', ['Ya', 'Tidak'])->nullable();
            $table->timestamps();
        });

        Schema::table('manfaat_kondisi_danau', function (Blueprint $table) {
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
        Schema::dropIfExists('manfaat_kondisi_danau');
    }
}
