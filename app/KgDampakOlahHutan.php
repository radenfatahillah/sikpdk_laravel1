<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgDampakOlahHutan extends Model
{
    protected $table = 'kg_dampak_olah_hutan';
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

    public function dampakolahhutan()
    {
        return $this->hasMany('App\DampakOlahHutan');
    }
}
