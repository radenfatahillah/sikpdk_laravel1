<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranPanganBuah extends Model
{
    protected $table = 'pemasaran_pangan_buah';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_pangan_buah',
        'jual_pasar_pangan_buah',
        'jual_kud_pangan_buah',
        'jual_tengkulak_pangan_buah',
        'jual_pengecer_pangan_buah',
        'jual_lumbung_pangan_buah',
        'tidak_jual_pangan_buah',
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
