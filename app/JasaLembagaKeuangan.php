<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JasaLembagaKeuangan extends Model
{
    protected $table = 'jasa_lembaga_keuangan';
    protected $fillable = [
        'desa_id',
        'kgjasalembagakeuangan_id',
        'jumlah',
        'kegiatan',
        'pengurus',
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

    public function kgjasalembagakeuangan()
    {
        return $this->belongsTo('App\KgJasaLembagaKeuangan');
    }
}
