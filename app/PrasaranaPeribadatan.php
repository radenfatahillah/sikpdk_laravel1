<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaPeribadatan extends Model
{
    protected $table = 'prasarana_peribadatan';
    protected $fillable = [
        'desa_id', 'kgprasaranaperibadatan_id', 'jumlah',
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

    public function kgprasaranaperibadatan()
    {
        return $this->belongsTo('App\KgPrasaranaPeribadatan');
    }
}
