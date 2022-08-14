<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanamanApotik extends Model
{
    protected $table = 'tanaman_apotik';
    protected $fillable = [
        'desa_id', 'kghasilperkebunan_id', 'luas', 'hasil',
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

    public function kgtanamanapotik()
    {
        return $this->belongsTo('App\KgTanamanApotik');
    }
}
