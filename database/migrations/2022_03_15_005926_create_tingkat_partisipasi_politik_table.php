<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTingkatPartisipasiPolitikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkat_partisipasi_politik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgtingkatpartisipasipolitik_id')->nullable();
            $table->integer('punyahakpilih_lakilaki')->nullable();
            $table->integer('punyahakpilih_perempuan')->nullable();
            $table->integer('manfaathakpilih_lakilaki')->nullable();
            $table->integer('manfaathakpilih_perempuan')->nullable();
            $table->timestamps();
        });

        Schema::table('tingkat_partisipasi_politik', function (Blueprint $table) {
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
        Schema::dropIfExists('tingkat_partisipasi_politik');
    }
}
