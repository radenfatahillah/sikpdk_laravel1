<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranaLaut extends Model
{
    protected $table = 'sarana_laut';
    protected $fillable = [
        'desa_id', 'kgsaranalaut_id', 'jumlah',
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

    public function kgsaranalaut()
    {
        return $this->belongsTo('App\KgSaranaLaut');
    }
}
