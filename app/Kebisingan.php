<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kebisingan extends Model
{
    protected $table = 'kebisingan';
    protected $fillable = [
        'desa_id', 'kgkebisingan_id', 'dampak', 'sumber', 'efek'
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

    public function kgkebisingan()
    {
        return $this->belongsTo('App\KgKebisingan');
    }
}
