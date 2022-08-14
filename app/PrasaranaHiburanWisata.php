<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaHiburanWisata extends Model
{
    protected $table = 'prasarana_hiburan_wisata';
    protected $fillable = [
        'desa_id', 'kgprasaranahiburanwisata_id', 'jumlah',
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

    public function kgprasaranahiburanwisata()
    {
        return $this->belongsTo('App\KgPrasaranaHiburanWisata');
    }
}
