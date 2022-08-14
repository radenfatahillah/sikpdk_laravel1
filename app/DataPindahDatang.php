<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPindahDatang extends Model
{
    protected $table = 'pindah_datang';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'no_skpwni',
        'NOKK_asal',
        'nama_KK_asal',
        'NIK',
        'name',
        'jeniskelamin_id',
        'tempatlahir',
        'agama_id',
        'tanggallahir',
        'nama_ayah',
        'nama_ibu',
        'alamat_id',
        'rt',
        'rw',
        'alamat_asal',
        'klasifikasipindah_id',
        'tanggal',
        'desa_id',
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

    public function klasifikasipindah()
    {
        return $this->belongsTo('App\KlasifikasiPindah');
    }

    public function alamat()
    {
        return $this->belongsTo('App\Alamat');
    }

    public function agama()
    {
        return $this->belongsTo('App\Agama');
    }
}
