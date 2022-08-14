<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgProduksiTernak extends Model
{
    protected $table = 'kg_produksi_ternak';
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

    public function produksiternak()
    {
        return $this->hasMany('App\ProduksiTernak');
    }
}
