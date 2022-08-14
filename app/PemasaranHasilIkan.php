<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranHasilIkan extends Model
{
    protected $table = 'pemasaran_hasil_ikan';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_perikanan',
        'jual_pasar_perikanan',
        'jual_kud_perikanan',
        'jual_tengkulak_perikanan',
        'jual_pengecer_perikanan',
        'jual_lumbung_perikanan',
        'tidak_jual_perikanan',
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
