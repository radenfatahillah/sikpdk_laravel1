<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rawa extends Model
{
    protected $table = 'rawa';
    protected $fillable = [
        'desa_id',
        'luas_rawa',
        'perikanandarat_rawa',
        'airbakuolah_rawa',
        'cucimandi_rawa',
        'irigasi_rawa',
        'bab_rawa',
        'perikanan_rawa',
        'sayuran_rawa',
        'mangrove_rawa',
        'lain_rawa',
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
