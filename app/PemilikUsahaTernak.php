<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikUsahaTernak extends Model
{
    protected $table = 'pemilik_usaha_ternak';
    protected $fillable = [
        'desa_id', 'kgpemilikusahaternak_id', 'jumlah',
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

    public function kgpemilikusahaternak()
    {
        return $this->belongsTo('App\KgPemilikUsahaTernak');
    }
}
