<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgLembagaKemasyarakatan extends Model
{
    protected $table = 'kg_lembaga_kemasyarakatan';
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

    public function lembagakemasyarakatan()
    {
        return $this->hasMany('App\LembagaKemasyarakatan');
    }
}
