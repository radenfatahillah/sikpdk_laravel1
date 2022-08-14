<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $fillable = [
        'name', 'tahun_bentuk', 'koordinat_bujur', 'koordinat_lintang',
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

    public function alamat()
    {
        return $this->hasMany('App\Alamat');
    }

    public function datapenduduk()
    {
        return $this->hasMany('App\DataPenduduk');
    }

    public function datakelahiran()
    {
        return $this->hasMany('App\DataKelahiran');
    }

    public function datakematian()
    {
        return $this->hasMany('App\DataKematian');
    }

    public function datapindahkeluar()
    {
        return $this->hasMany('App\DataPindahKeluar');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
