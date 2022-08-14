<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlatProduksiLaut extends Model
{
    protected $table = 'alat_produksi_laut';
    protected $fillable = [
        'desa_id', 'kgalatproduksilaut_id', 'jumlah', 'hasil',
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

    public function kgalatproduksilaut()
    {
        return $this->belongsTo('App\KgAlatProduksiLaut');
    }
}
