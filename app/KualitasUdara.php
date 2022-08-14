<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KualitasUdara extends Model
{
    protected $table = 'kualitas_udara';
    protected $fillable = [
        'desa_id', 'kgkualitasudara_id', 'jumlah', 'polutan', 'efek', 'pemerintah', 'swasta', 'perorangan',
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

    public function kgkualitasudara()
    {
        return $this->belongsTo('App\KgKualitasUdara');
    }
}
