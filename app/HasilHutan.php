<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilHutan extends Model
{
    protected $table = 'hasil_hutan';
    protected $fillable = [
        'desa_id',
        'kghasilhutan_id',
        'hasil',
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

    public function kghasilhutan()
    {
        return $this->belongsTo('App\KgHasilHutan');
    }
}
