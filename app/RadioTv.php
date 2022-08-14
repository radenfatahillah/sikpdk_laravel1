<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadioTv extends Model
{
    protected $table = 'radio_tv';
    protected $fillable = [
        'desa_id', 'kgradiotv_id', 'jumlah',
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

    public function kgradiotv()
    {
        return $this->belongsTo('App\KgRadioTv');
    }
}
