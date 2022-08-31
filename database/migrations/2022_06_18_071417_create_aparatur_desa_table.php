<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAparaturDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparatur_desa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->string('dasarhukumperdes')->nullable();
            $table->string('dasarhukumbpd')->nullable();
            $table->enum('keberadaanbpd', ['Ada - Aktif', 'Ada - Tidak Aktif', 'Tidak Ada'])->nullable();
            $table->timestamps();
        });

        Schema::table('aparatur_desa', function (Blueprint $table) {
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
        Schema::dropIfExists('aparatur_desa');
    }
}
