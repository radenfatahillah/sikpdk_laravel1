<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgUsahaJasaPenginapan extends Model
{
    protected $table = 'kg_usaha_jasa_penginapan';
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

    public function usahajasapenginapan()
    {
        return $this->hasMany('App\UsahaJasaPenginapan');
    }
}
