<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotensiAirSda extends Model
{
    protected $table = 'potensi_air_sda';
    protected $fillable = [
        'desa_id', 'kgpotensiairsda_id', 'debit',
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

    public function kgpotensiairsda()
    {
        return $this->belongsTo('App\KgPotensiAirSda');
    }
}
