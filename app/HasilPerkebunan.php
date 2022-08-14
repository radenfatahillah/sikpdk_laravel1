<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPerkebunan extends Model
{
    protected $table = 'hasil_perkebunan';
    protected $fillable = [
        'desa_id', 'kghasilperkebunan_id', 'luasnegara', 'hasilnegara', 'luasrakyat', 'hasilrakyat'
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

    public function kghasilperkebunan()
    {
        return $this->belongsTo('App\KgHasilPerkebunan');
    }
}
