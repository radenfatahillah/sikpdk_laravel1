<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisIkan extends Model
{
    protected $table = 'jenis_ikan';
    protected $fillable = [
        'desa_id', 'kgjenisikan_id', 'hasil',
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

    public function kgjenisikan()
    {
        return $this->belongsTo('App\KgJenisIkan');
    }
}
