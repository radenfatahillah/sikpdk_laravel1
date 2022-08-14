<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManfaatKondisiDanau extends Model
{
    protected $table = 'manfaat_kondisi_danau';
    protected $fillable = [
        'desa_id',
        'luas_danau',
        'perikanan_danau',
        'airminum_danau',
        'cucimandi_danau',
        'irigasi_danau',
        'bab_danau',
        'pembangkitlistrik_danau',
        'prasaranatransportasi_danau',
        'lainnya_danau',
        'tercemar_danau',
        'dangkal_danau',
        'keruh_danau',
        'berlumpur_danau',
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
