<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaSaranaKebersihan extends Model
{
    protected $table = 'prasarana_sarana_kebersihan';
    protected $fillable = [
        'desa_id', 'kgprasaranasaranakebersihan_id', 'jumlah',
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

    public function kgprasaranasaranakebersihan()
    {
        return $this->belongsTo('App\KgPrasaranaSaranaKebersihan');
    }
}
