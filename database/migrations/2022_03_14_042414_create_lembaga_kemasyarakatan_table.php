<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaKemasyarakatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_kemasyarakatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('kglembagakemasyarakatan_id');
            $table->string('dasarhukumpembentukan')->nullable();
            $table->integer('jumlah_lembaga')->nullable();
            $table->integer('jumlah_pengurus')->nullable();
            $table->integer('ruang_lingkup_kegiatan')->nullable();
            $table->integer('jumlah_jenis_kegiatan')->nullable();
            $table->timestamps();
        });

        Schema::table('lembaga_kemasyarakatan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kglembagakemasyarakatan_id')->references('id')->on('kg_lembaga_kemasyarakatan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembaga_kemasyarakatan');
    }
}
