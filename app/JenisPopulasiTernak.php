<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPopulasiTernak extends Model
{
    protected $table = 'jenis_populasi_ternak';
    protected $fillable = [
        'desa_id', 'kgjenispopulasiternak_id', 'jumlahpemilik', 'perkiraanjumlah',
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

    public function kgjenispopulasiternak()
    {
        return $this->belongsTo('App\KgJenisPopulasiTernak');
    }
}
