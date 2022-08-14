<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaLaut extends Model
{
    protected $table = 'prasarana_laut';
    protected $fillable = [
        'desa_id', 'kgprasaranalaut_id', 'jumlah',
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

    public function kgprasaranalaut()
    {
        return $this->belongsTo('App\KgPrasaranaLaut');
    }
}
