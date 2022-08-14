<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaJasaPerdagangan extends Model
{
    protected $table = 'usaha_jasa_perdagangan';
    protected $fillable = [
        'desa_id',
        'kgusahajasaperdagangan_id',
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

    public function kgusahajasaperdagangan()
    {
        return $this->belongsTo('App\KgUsahaJasaPerdagangan');
    }
}
