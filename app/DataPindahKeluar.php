<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPindahKeluar extends Model
{
    protected $table = 'pindah_keluar';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'NIK',
        'desa_id',
        'no_skpwni',
        'klasifikasipindah_id',
        'alamat_sekarang',
        'tanggal',
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
        return $this->belongsTo('App\DataPenduduk', 'NIK');
    }

    public function klasifikasipindah()
    {
        return $this->belongsTo('App\KlasifikasiPindah');
    }

    public function desa()
    {
        return $this->belongsTo('App\Desa');
    }
}
