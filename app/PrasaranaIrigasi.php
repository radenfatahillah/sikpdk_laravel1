<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaIrigasi extends Model
{
    protected $table = 'prasarana_irigasi';
    protected $fillable = [
        'desa_id',
        'panjang_saluran_primer',
        'panjang_saluran_sekunder',
        'panjang_saluran_tersier',
        'jumlah_pintu_sadap',
        'jumlah_pintu_pembagi_air',
        'kondisi_saluran_primer',
        'kondisi_saluran_sekunder',
        'kondisi_saluran_tersier',
        'pintu_sadap',
        'pintu_pembagi_air',
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
