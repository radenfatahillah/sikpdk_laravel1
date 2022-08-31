<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->bigInteger('NIK')->unique();
            $table->date('tanggal_meninggal');
            $table->string('tempat_meninggal');
            $table->string('sebab_meninggal');
            $table->timestamps();
        });

        Schema::table('kematian', function (Blueprint $table) {
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
        Schema::dropIfExists('kematian');
    }
}
