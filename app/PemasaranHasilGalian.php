<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranHasilGalian extends Model
{
    protected $table = 'pemasaran_hasil_galian';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_galian',
        'jual_pasar_galian',
        'jual_kud_galian',
        'jual_tengkulak_galian',
        'jual_pengecer_galian',
        'jual_perusahaan_galian',
        'jual_lumbung_galian',
        'tidak_jual_galian',
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
