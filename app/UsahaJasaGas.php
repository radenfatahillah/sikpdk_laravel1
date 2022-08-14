<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaJasaGas extends Model
{
    protected $table = 'usaha_jasa_gas';
    protected $fillable = [
        'desa_id',
        'kgusahajasagas_id',
        'jumlah',
        'jenis_produk',
        'jumlah_tenagakerja',
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

    public function kgusahajasagas()
    {
        return $this->belongsTo('App\KgUsahaJasaGas');
    }
}
