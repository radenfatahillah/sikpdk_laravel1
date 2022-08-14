<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    protected $table = 'data_penduduk';
    protected $primaryKey = 'NIK';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'NIK',
        'NOKK',
        'name',
        'jeniskelamin_id',
        'tempatlahir',
        'tanggallahir',
        'agama_id',
        'pendidikan_kk_id',
        'pendidikan_sedang_id',
        'etnis_id',
        'penyandangcacat_id',
        'jenispekerjaan_id',
        'golongandarah_id',
        'statusperkawinan_id',
        'shdk_id',
        'kewarganegaraan_id',
        'no_paspor',
        'no_kitap',
        'nama_ayah',
        'nama_ibu',
        'alamat_id',
        'rt',
        'rw',
        'desa_id',
        'ktpel_id',
        'status',
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

    public function agama()
    {
        return $this->belongsTo('App\Agama');
    }

    public function etnis()
    {
        return $this->belongsTo('App\Etnis');
    }

    public function shdk()
    {
        return $this->belongsTo('App\SHDK');
    }

    public function statusperkawinan()
    {
        return $this->belongsTo('App\StatusPerkawinan');
    }

    public function pendidikan_kk()
    {
        return $this->belongsTo('App\Pendidikan');
    }

    public function pendidikan_sedang()
    {
        return $this->belongsTo('App\PendidikanSedang');
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo('App\Kewarganegaraan');
    }

    public function jenispekerjaan()
    {
        return $this->belongsTo('App\JenisPekerjaan');
    }

    public function penyandangcacat()
    {
        return $this->belongsTo('App\PenyandangCacat');
    }

    public function alamat()
    {
        return $this->belongsTo('App\Alamat');
    }

    public function golongandarah()
    {
        return $this->belongsTo('App\GolonganDarah');
    }

    public function jeniskelamin()
    {
        return $this->belongsTo('App\JenisKelamin');
    }

    public function ktpel()
    {
        return $this->belongsTo('App\KTPEl');
    }

    public function datakematian()
    {
        return $this->hasOne('App\DataKematian');
    }

    public function datapindahkeluar()
    {
        return $this->hasOne('App\DataPindahKeluar');
    }

    public function datapindahdatang()
    {
        return $this->hasOne('App\DataPindahDatang');
    }
}
