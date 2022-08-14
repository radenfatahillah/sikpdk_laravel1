<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaJasaKeterampilan extends Model
{
    protected $table = 'usaha_jasa_keterampilan';
    protected $fillable = [
        'desa_id',
        'kgusahajasaketerampilan_id',
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

    public function kgusahajasaketerampilan()
    {
        return $this->belongsTo('App\KgUsahaJasaKeterampilan');
    }
}
