<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaJasaKeterampilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha_jasa_keterampilan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgusahajasaketerampilan_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('jenis_produk')->nullable();
            $table->integer('jumlah_tenagakerja')->nullable();
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
        Schema::dropIfExists('usaha_jasa_keterampilan');
    }
}
