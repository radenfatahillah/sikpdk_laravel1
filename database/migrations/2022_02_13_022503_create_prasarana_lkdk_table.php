<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaLKDKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_lkdk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->enum('gedung_kantor_lkd', ['Ada', 'Tidak'])->nullable();
            $table->enum('komputer_lkd', ['Ada', 'Tidak'])->nullable();
            $table->enum('mesin_fax_lkd', ['Ada', 'Tidak'])->nullable();
            $table->enum('mesin_tik_lkd', ['Ada', 'Tidak'])->nullable();
            $table->enum('kardek_lkd', ['Ada', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_lkd')->nullable();
            $table->integer('jumlah_meja_kursi_lkd')->nullable();
            $table->enum('kantor_lpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('komputer_lpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('mesin_fax_lpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('mesin_tik_lpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('kardek_lpm', ['Ada', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_lmb_lpm')->nullable();
            $table->integer('jumlah_meja_kursi_lpm')->nullable();
            $table->integer('buku_administrasi_lpm')->nullable();
            $table->integer('jenis_kegiatan_lpm')->nullable();
            $table->enum('pkk', ['Ada', 'Tidak'])->nullable();
            $table->enum('gedung_pkk', ['Ada', 'Tidak'])->nullable();
            $table->enum('atk_pkk', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_pkk', ['Ada - Aktif', 'Ada - Pasif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_pkk')->nullable();
            $table->enum('kegiatan_pkk', ['Ada', 'Tidak'])->nullable();
            $table->integer('jumlah_kegiatan_pkk')->nullable();
            $table->enum('karang_taruna', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_kt', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_kt')->nullable();
            $table->integer('jumlah_kegiatan_kt')->nullable();
            $table->integer('jumlah_rt')->nullable();
            $table->enum('rukun_tetangga', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_rt', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_rt')->nullable();
            $table->integer('jumlah_kegiatan_rt')->nullable();
            $table->integer('jumlah_rw')->nullable();
            $table->enum('rukun_warga', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_rw', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_rw')->nullable();
            $table->integer('jumlah_kegiatan_rw')->nullable();
            $table->enum('gedung_lembagaadat', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_lembagaadat', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_lembagaadat')->nullable();
            $table->integer('jumlah_kegiatan_lembagaadat')->nullable();
            $table->enum('bumdes', ['Ada', 'Tidak'])->nullable();
            $table->enum('gedung_bumdes', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_bumdes', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_bumdes')->nullable();
            $table->integer('jumlah_kegiatan_bumdes')->nullable();
            $table->enum('fkkpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('gedung_fkkpm', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_fkkpm', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_fkkpm')->nullable();
            $table->integer('jumlah_kegiatan_fkkpm')->nullable();
            $table->enum('gedung_organisasi_sosial', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_sosial', ['Aktif', 'Tidak'])->nullable();
            $table->enum('gedung_organisasi_profesi', ['Ada', 'Tidak'])->nullable();
            $table->enum('kepengurusan_organisasi_profesi', ['Aktif', 'Tidak'])->nullable();
            $table->integer('buku_administrasi_org_profesi')->nullable();
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
        Schema::dropIfExists('prasarana_lkdk');
    }
}
