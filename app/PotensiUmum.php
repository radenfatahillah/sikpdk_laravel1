<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiUmum extends Model
{
    protected $table = 'potensi_umum';
    protected $fillable = [
        'desa_id', 'batas_utara_desa', 'batas_utara_kec',
        'batas_selatan_desa', 'batas_selatan_kec', 'batas_timur_desa', 'batas_timur_kec',
        'batas_barat_desa', 'batas_barat_kec', 'penetapan_batas', 'peta_wilayah', 'perdes_no', 'perda_no',
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
