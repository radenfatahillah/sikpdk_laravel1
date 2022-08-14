<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaKesehatan extends Model
{
    protected $table = 'prasarana_kesehatan';
    protected $fillable = [
        'desa_id', 'kgprasaranakesehatan_id', 'jumlah',
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

    public function kgprasaranakesehatan()
    {
        return $this->belongsTo('App\KgPrasaranaKesehatan');
    }
}
