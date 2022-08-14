<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';
    protected $fillable = [
        'name', 'desa_id', 'nama_kadus', 'status',
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

    public function desa()
    {
        return $this->belongsTo('App\Desa');
    }

    public function datapenduduk()
    {
        return $this->hasMany('App\DataPenduduk');
    }

    public function datakelahiran()
    {
        return $this->hasMany('App\DataKelahiran');
    }

    public function datapindahdatang()
    {
        return $this->hasMany('App\DataPindahDatang');
    }
}
