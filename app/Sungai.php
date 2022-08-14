<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sungai extends Model
{
    protected $table = 'sungai';
    protected $fillable = [
        'desa_id',
        'jumlah_sungai',
        'tercemar_sungai',
        'dangkal_sungai',
        'keruh_sungai',
        'jernih_sungai',
        'kurangbiota_sungai',
        'kering_sungai',
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
