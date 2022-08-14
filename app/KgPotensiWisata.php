<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgPotensiWisata extends Model
{
    protected $table = 'kg_potensi_wisata';
    protected $fillable = [
        'name',
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

    public function potensiwisata()
    {
        return $this->hasMany('App\PotensiWisata');
    }
}
