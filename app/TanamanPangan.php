<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanamanPangan extends Model
{
    protected $table = 'tanaman_pangan';
    protected $fillable = [
        'desa_id', 'kgtanamanpangan_id', 'luas', 'hasil',
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

    public function kgtanamanpangan()
    {
        return $this->belongsTo('App\KgTanamanPangan');
    }
}
