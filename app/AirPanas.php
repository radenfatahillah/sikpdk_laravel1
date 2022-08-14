<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirPanas extends Model
{
    protected $table = 'air_panas';
    protected $fillable = [
        'desa_id', 'kgairpanas_id', 'jumlah', 'manfaat', 'pemerintah', 'swasta', 'perorangan',
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

    public function kgairpanas()
    {
        return $this->belongsTo('App\KgAirPanas');
    }
}
