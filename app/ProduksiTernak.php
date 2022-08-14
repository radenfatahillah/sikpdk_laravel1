<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduksiTernak extends Model
{
    protected $table = 'produksi_ternak';
    protected $fillable = [
        'desa_id', 'kgproduksiternak_id', 'hasil',
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

    public function kgproduksiternak()
    {
        return $this->belongsTo('App\KgProduksiTernak');
    }
}
