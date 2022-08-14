<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgPrasaranaHiburanWisata extends Model
{
    protected $table = 'kg_prasarana_hiburan_wisata';
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

    public function prasaranahiburanwisata()
    {
        return $this->hasMany('App\PrasaranaHiburanWisata');
    }
}
