<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaJasaPengangkutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha_jasa_pengangkutan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgusahajasapengangkutan_id')->nullable();
            $table->string('kategorijasapengangkutan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('pemilik')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->integer('jumlah_tenagakerja')->nullable();
            $table->timestamps();
        });

        Schema::table('usaha_jasa_pengangkutan', function (Blueprint $table) {
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
        Schema::dropIfExists('usaha_jasa_pengangkutan');
    }
}
