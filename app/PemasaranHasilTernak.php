<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemasaranHasilTernak extends Model
{
    protected $table = 'pemasaran_hasil_ternak';
    protected $fillable = [
        'desa_id',
        'jual_konsumen_ternak',
        'jual_pasar_ternak',
        'jual_kud_ternak',
        'jual_tengkulak_ternak',
        'jual_pengecer_ternak',
        'jual_lumbung_ternak',
        'tidak_jual_ternak',
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
