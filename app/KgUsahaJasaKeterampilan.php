<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgUsahaJasaKeterampilan extends Model
{
    protected $table = 'kg_usaha_jasa_keterampilan';
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

    public function usahajasaketerampilan()
    {
        return $this->hasMany('App\UsahaJasaKeterampilan');
    }
}
