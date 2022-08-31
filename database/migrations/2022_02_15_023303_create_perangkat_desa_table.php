<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerangkatDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat_desa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->string('name')->nullable();
            $table->string('nip')->nullable();
            $table->enum('jabatan', [
                'Kepala Desa/Lurah', 'Sekretaris Desa', 'Kepala Seksi Pemerintahan',
                'Kepala Seksi Kesejahteraan Rakyat', 'Kepala Seksi Pelayanan', 'Kepala Urusan Tata Usaha dan Umum',
                'Kepala Urusan Keuangan', 'Kepala Urusan Perencanaan', 'Staf'
            ])->nullable();
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3'])->nullable();
            $table->enum('status', ['Ada', 'Ada - Aktif', 'Ada - Tidak Aktif', 'Tidak Ada'])->nullable();
            $table->timestamps();
        });

        Schema::table('perangkat_desa', function (Blueprint $table) {
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
        Schema::dropIfExists('perangkat_desa');
    }
}
