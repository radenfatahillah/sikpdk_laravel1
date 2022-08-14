<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgSumberAirBersih extends Model
{
    protected $table = 'kg_sumber_air_bersih';
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

    public function sumberairbersih()
    {
        return $this->hasMany('App\SumberAirBersih');
    }
}
