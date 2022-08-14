<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AparaturDesa extends Model
{
    protected $table = 'aparatur_desa';
    protected $fillable = [
        'desa_id', 'dasarhukumperdes', 'dasarhukumbpd', 'keberadaanbpd',
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
}
