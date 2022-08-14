<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanGalian extends Model
{
    protected $table = 'bahan_galian';
    protected $fillable = [
        'desa_id', 'kgbahangalian_id', 'keberadaan', 'skalaproduksi', 'kepemilikan'
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

    public function kgbahangalian()
    {
        return $this->belongsTo('App\KgBahanGalian');
    }
}
