<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HijauanPakanTernak extends Model
{
    protected $table = 'hijauan_pakan_ternak';
    protected $fillable = [
        'desa_id',
        'ls_tanaman_pakan_ternak',
        'produksi_hijauan_pakan_ternak',
        'ls_lahan_gembalaan',
        'pasok_dari_luardesa',
        'subsidi_dinas',
        'lainnya_ketersediaan_hijauan',
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
}
