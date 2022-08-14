<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKematian extends Model
{
    protected $table = 'kematian';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'NIK',
        'desa_id',
        'tanggal_meninggal',
        'tempat_meninggal',
        'sebab_meninggal',
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
        return $this->belongsTo('App\DataPenduduk', 'NIK');
    }

    public function jeniskelamin()
    {
        return $this->belongsTo('App\JenisKelamin');
    }
}
