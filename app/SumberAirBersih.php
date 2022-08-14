<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SumberAirBersih extends Model
{
    protected $table = 'sumber_air_bersih';
    protected $fillable = [
        'desa_id', 'kgsumberairbersih_id', 'jumlah', 'kondisi', 'pemanfaatan', 'kualitas'
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

    public function kgsumberairbersih()
    {
        return $this->belongsTo('App\KgSumberAirBersih');
    }
}
