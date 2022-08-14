<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriDarat extends Model
{
    protected $table = 'kategori_darat';
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

    public function prasaranadarat()
    {
        return $this->hasMany('App\PrasaranaDarat');
    }
}
