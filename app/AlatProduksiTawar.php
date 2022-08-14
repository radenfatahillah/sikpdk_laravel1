<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlatProduksiTawar extends Model
{
    protected $table = 'alat_produksi_tawar';
    protected $fillable = [
        'desa_id', 'kgalatproduksitawar_id', 'jumlah', 'hasil',
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

    public function kgalatproduksitawar()
    {
        return $this->belongsTo('App\KgAlatProduksiTawar');
    }
}
