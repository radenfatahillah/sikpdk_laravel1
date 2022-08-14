<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndustriKecil extends Model
{
    protected $table = 'industri_kecil';
    protected $fillable = [
        'desa_id',
        'kgindustrikecil_id',
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

    public function kgindustrikecil()
    {
        return $this->belongsTo('App\KgIndustriKecil');
    }
}
