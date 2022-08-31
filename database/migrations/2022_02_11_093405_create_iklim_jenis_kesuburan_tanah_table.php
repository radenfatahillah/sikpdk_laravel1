<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIklimJenisKesuburanTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklim_jenis_kesuburan_tanah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->float('curah_hujan', 5, 2)->nullable();
            $table->float('jumlah_bulan_hujan', 5, 2)->nullable();
            $table->float('kelembapan', 5, 2)->nullable();
            $table->float('suhu_rata_rata_harian', 5, 2)->nullable();
            $table->float('tinggi_tempat_permukaan_laut', 5, 2)->nullable();
            $table->float('warna_tanah', 5, 2)->nullable();
            $table->float('tekstur_tanah', 5, 2)->nullable();
            $table->float('tk_kemiringan_tanah', 5, 2)->nullable();
            $table->float('lahan_kritis', 5, 2)->nullable();
            $table->float('lahan_terlantar', 5, 2)->nullable();
            $table->timestamps();
        });

        Schema::table('iklim_jenis_kesuburan_tanah', function (Blueprint $table) {
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
        Schema::dropIfExists('iklim_jenis_kesuburan_tanah');
    }
}
