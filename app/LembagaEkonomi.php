<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembagaEkonomi extends Model
{
    protected $table = 'lembaga_ekonomi';
    protected $fillable = [
        'desa_id',
        'kglembagaekonomi_id',
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

    public function kglembagaekonomi()
    {
        return $this->belongsTo('App\KgLembagaEkonomi');
    }
}
