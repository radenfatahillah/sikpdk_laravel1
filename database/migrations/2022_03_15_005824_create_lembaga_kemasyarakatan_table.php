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
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kglembagakemasyarakatan_id')->nullable();
            $table->string('dasarhukumpembentukan')->nullable();
            $table->integer('jumlah_lembaga')->nullable();
            $table->integer('jumlah_pengurus')->nullable();
            $table->integer('ruang_lingkup_kegiatan')->nullable();
            $table->integer('jumlah_jenis_kegiatan')->nullable();
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
        Schema::dropIfExists('lembaga_kemasyarakatan');
    }
}
