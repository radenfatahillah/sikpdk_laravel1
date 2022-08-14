<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $table = 'jenis_kelamin';
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

    public function datakelahiran()
    {
        return $this->hasMany('App\DataKelahiran');
    }

    public function datapindahdatang()
    {
        return $this->hasMany('App\DataPindahDatang');
    }

    public function datakematian()
    {
        return $this->hasMany('App\DataKematian');
    }
}
