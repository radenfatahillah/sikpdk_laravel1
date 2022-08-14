<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KlasifikasiPindah extends Model
{
    protected $table = 'klasifikasi_pindah';
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

    public function datapindahkeluar()
    {
        return $this->hasMany('App\DataPindahKeluar');
    }

    public function datapindahdatang()
    {
        return $this->hasMany('App\DataPindahDatang');
    }
}
