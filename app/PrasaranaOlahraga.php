<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaOlahraga extends Model
{
    protected $table = 'prasarana_olahraga';
    protected $fillable = [
        'desa_id', 'kgprasaranaolahraga_id', 'jumlah',
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

    public function kgprasaranaolahraga()
    {
        return $this->belongsTo('App\KgPrasaranaOlahraga');
    }
}
