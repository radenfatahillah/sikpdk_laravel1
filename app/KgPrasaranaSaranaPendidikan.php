<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgPrasaranaSaranaPendidikan extends Model
{
    protected $table = 'kg_prasarana_sarana_pendidikan';
    protected $fillable = [
        'name',
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

    public function prasaranasaranapendidikan()
    {
        return $this->hasMany('App\PrasaranaSaranaPendidikan');
    }
}
