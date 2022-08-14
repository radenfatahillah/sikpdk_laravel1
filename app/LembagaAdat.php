<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembagaAdat extends Model
{
    protected $table = 'lembaga_adat';
    protected $fillable = [
        'desa_id',
        'pemangkut_adat',
        'kepengurusan_adat',
        'rumah_adat',
        'barang_pusaka',
        'naskah_naskah',
        'musyawarah_adat',
        'sanksi_adat',
        'upacara_adat_perkawinan',
        'upacara_adat_kematian',
        'upacara_adat_kelahiran',
        'upacara_adat_cocok_tanam',
        'upacara_adat_bidang_perikanan',
        'upacara_adat_bidang_kehutanan',
        'upacara_adat_kelola_sda',
        'upacara_adat_dalam_bangun_rumah',
        'upacara_adat_penyelesaian_masalah',
    ];

    public static function ambilSemua()
    {
        return self::all();
    }

    public static function ambil($id)
    {
        return self::find($id);
    }

    public function tambah()
    {
    }

    public static function hapus($id)
    {
        $this->find($id);
        return self::delete($id);
    }
}
