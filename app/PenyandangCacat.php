<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenyandangCacat extends Model
{
    protected $table = 'penyandang_cacat';
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

    public function datapenduduk()
    {
        return $this->hasMany('App\DataPenduduk');
    }
}
