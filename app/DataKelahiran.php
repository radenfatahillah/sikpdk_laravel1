<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nama_KK',
        'NOKK',
        'name',
        'jeniskelamin_id',
        'tempatlahir',
        'tanggallahir',
        'nama_ayah',
        'nama_ibu',
        'alamat_id',
        'golongandarah_id',
        'rt',
        'rw',
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

    public function jeniskelamin()
    {
        return $this->belongsTo('App\JenisKelamin');
    }

    public function alamat()
    {
        return $this->belongsTo('App\Alamat');
    }

    public function golongandarah()
    {
        return $this->belongsTo('App\GolonganDarah');
    }
}
