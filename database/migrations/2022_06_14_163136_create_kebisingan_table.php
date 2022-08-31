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
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgkebisingan_id')->nullable();
            $table->enum('dampak', ['Ya', 'Tidak'])->nullable();
            $table->enum('sumber', ['Kendaraan Bermotor', 'Kereta Api', 'Pelabuhan', 'Airport', 'Pabrik', 'Dll'])->nullable();
            $table->string('efek')->nullable();
            $table->timestamps();
        });

        Schema::table('kebisingan', function (Blueprint $table) {
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
        Schema::dropIfExists('kebisingan');
    }
}
