<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaSaranaPendidikan extends Model
{
    protected $table = 'prasarana_sarana_pendidikan';
    protected $fillable = [
        'desa_id', 'kgprasaranasaranapendidikan_id', 'sewa', 'milik_sendiri',
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

    public function kgprasaranasaranapendidikan()
    {
        return $this->belongsTo('App\KgPrasaranaSaranaPendidikan');
    }
}
