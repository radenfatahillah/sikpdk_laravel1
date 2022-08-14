<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KondisiHutan extends Model
{
    protected $table = 'kondisi_hutan';
    protected $fillable = [
        'desa_id',
        'kgkondisihutan_id',
        'baik',
        'rusak',
        'total',
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

    public function kgkondisihutan()
    {
        return $this->belongsTo('App\KgKondisiHutan');
    }
}
