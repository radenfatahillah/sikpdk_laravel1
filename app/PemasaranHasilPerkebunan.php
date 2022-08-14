<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranHasilPerkebunan extends Model
{
    protected $table = 'pemasaran_hasil_perkebunan';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_kebun',
        'jual_pasar_kebun',
        'jual_kud_kebun',
        'jual_tengkulak_kebun',
        'jual_pengecer_kebun',
        'jual_lumbung_kebun',
        'tidak_jual_kebun',
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
