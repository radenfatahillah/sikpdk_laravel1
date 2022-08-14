<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaPemerintahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_pemerintahan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->string('dasar_hukum_bentuk_pemdes')->nullable();
            $table->string('dasar_hukum_bentuk_bpd')->nullable();
            $table->string('koordinat_bujur')->nullable();
            $table->string('koordinat_lintang')->nullable();
            $table->integer('tahun_bentuk')->nullable();
            $table->enum('keberadaan_bpd', ['Ada - Aktif', 'Ada - Pasif', 'Tidak Ada'])->nullable();
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
        Schema::dropIfExists('lembaga_pemerintahan');
    }
}
