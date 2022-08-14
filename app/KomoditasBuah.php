<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomoditasBuah extends Model
{
    protected $table = 'komoditas_buah';
    protected $fillable = [
        'desa_id', 'kgkomoditasbuah_id', 'luas', 'hasil',
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

    public function kgkomoditasbuah()
    {
        return $this->belongsTo('App\KgKomoditasBuah');
    }
}
