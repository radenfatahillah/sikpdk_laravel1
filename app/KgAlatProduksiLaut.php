<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgAlatProduksiLaut extends Model
{
    protected $table = 'kg_alat_produksi_laut';
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

    public function alatproduksilaut()
    {
        return $this->hasMany('App\AlatProduksiLaut');
    }
}
