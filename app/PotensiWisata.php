<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiWisata extends Model
{
    protected $table = 'potensi_wisata';
    protected $fillable = [
        'desa_id', 'kgpotensiwisata_id', 'luas', 'status',
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

    public function kgpotensiwisata()
    {
        return $this->belongsTo('App\KgPotensiWisata');
    }
}
