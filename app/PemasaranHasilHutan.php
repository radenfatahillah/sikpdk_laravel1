<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranHasilHutan extends Model
{
    protected $table = 'pemasaran_hasil_hutan';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_hutan',
        'jual_pasar_hutan',
        'jual_kud_hutan',
        'jual_tengkulak_hutan',
        'jual_pengecer_hutan',
        'jual_lumbung_hutan',
        'tidak_jual_hutan',
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
