<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKualitasUdaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kualitas_udara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgkualitasudara_id')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('polutan')->nullable();
            $table->enum('efek', ['Gangguan Penglihatan/Kabut', 'ISPA', 'Dll'])->nullable();
            $table->integer('pemerintah')->nullable();
            $table->integer('swasta')->nullable();
            $table->integer('perorangan')->nullable();
            $table->timestamps();
        });

        Schema::table('kualitas_udara', function (Blueprint $table) {
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
        Schema::dropIfExists('kualitas_udara');
    }
}
