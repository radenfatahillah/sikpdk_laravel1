<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetersediaanLahanTernak extends Model
{
    protected $table = 'ketersediaan_lahan_ternak';
    protected $fillable = [
        'desa_id',
        'milik_masyarakat_ternak',
        'milik_perusahaan_ternak',
        'milik_perorangan_ternak',
        'sewa_pakai_ternak',
        'milik_pemerintah_ternak',
        'milik_masyarakat_adat_ternak',
        'lainnya_sedia_lahan_ternak',
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
