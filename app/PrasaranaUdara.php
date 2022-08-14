<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaUdara extends Model
{
    protected $table = 'prasarana_udara';
    protected $fillable = [
        'desa_id', 'kgprasaranaudara_id', 'jumlah',
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

    public function kgprasaranaudara()
    {
        return $this->belongsTo('App\KgPrasaranaUdara');
    }
}
