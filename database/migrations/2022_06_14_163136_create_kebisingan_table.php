<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebisinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebisingan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgkebisingan_id')->nullable();
            $table->enum('dampak', ['Ya', 'Tidak'])->nullable();
            $table->enum('sumber', ['Kendaraan Bermotor', 'Kereta Api', 'Pelabuhan', 'Airport', 'Pabrik', 'Dll'])->nullable();
            $table->string('efek')->nullable();
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
        Schema::dropIfExists('kebisingan');
    }
}
