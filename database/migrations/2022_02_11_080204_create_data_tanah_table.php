<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->float('sawah_irigasi_teknis', 5, 2)->nullable();
            $table->float('sawah_irigasi_sth_teknis', 5, 2)->nullable();
            $table->float('sawah_tadah_hujan', 5, 2)->nullable();
            $table->float('sawah_pasang_surut', 5, 2)->nullable();
            $table->float('tegal_ladang', 5, 2)->nullable();
            $table->float('pemukiman', 5, 2)->nullable();
            $table->float('pekarangan', 5, 2)->nullable();
            $table->float('tanah_rawa', 5, 2)->nullable();
            $table->float('pasang_surut', 5, 2)->nullable();
            $table->float('lahan_gambut', 5, 2)->nullable();
            $table->float('situ_waduk_danau', 5, 2)->nullable();
            $table->float('perkebunan_rakyat', 5, 2)->nullable();
            $table->float('perkebunan_negara', 5, 2)->nullable();
            $table->float('perkebunan_swasta', 5, 2)->nullable();
            $table->float('perkebunan_perorangan', 5, 2)->nullable();
            $table->float('tanah_bengkok', 5, 2)->nullable();
            $table->float('tanah_titi_sara', 5, 2)->nullable();
            $table->float('kebun_desa', 5, 2)->nullable();
            $table->float('sawah_desa', 5, 2)->nullable();
            $table->float('lapangan_olahraga', 5, 2)->nullable();
            $table->float('perkantoran_pemerintah', 5, 2)->nullable();
            $table->float('ruang_publik', 5, 2)->nullable();
            $table->float('tempat_pemakaman_desa_umum', 5, 2)->nullable();
            $table->float('pembuangan_sampah', 5, 2)->nullable();
            $table->float('bangunan_sekolah_pt', 5, 2)->nullable();
            $table->float('pertokoan', 5, 2)->nullable();
            $table->float('fasilitas_pasar', 5, 2)->nullable();
            $table->float('terminal', 5, 2)->nullable();
            $table->float('jalan', 5, 2)->nullable();
            $table->float('daerah_tangkapan_air', 5, 2)->nullable();
            $table->float('usaha_perikanan', 5, 2)->nullable();
            $table->float('sutet_aliranlistrik', 5, 2)->nullable();
            $table->float('hutan_produksi_tetap', 5, 2)->nullable();
            $table->float('hutan_terbatas', 5, 2)->nullable();
            $table->float('hutan_konservasi', 5, 2)->nullable();
            $table->float('hutan_adat', 5, 2)->nullable();
            $table->float('hutan_asli', 5, 2)->nullable();
            $table->float('hutan_sekunder', 5, 2)->nullable();
            $table->float('hutan_buatan', 5, 2)->nullable();
            $table->float('hutan_mangrove', 5, 2)->nullable();
            $table->float('hutan_rakyat', 5, 2)->nullable();
            $table->float('hutan_lindung', 5, 2)->nullable();
            $table->float('suaka_alam', 5, 2)->nullable();
            $table->float('suaka_margasatwa', 5, 2)->nullable();
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
        Schema::dropIfExists('data_tanah');
    }
}
