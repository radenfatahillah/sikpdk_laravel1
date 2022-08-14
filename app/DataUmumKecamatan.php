<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUmumKecamatan extends Model
{
    protected $table = 'data_umum_kecamatan';
    protected $fillable = [
        'id',
        'profil_id',
        'tipologi',
        'ketinggian',
        'luas_wilayah',
        'jumlah_penduduk',
        'jml_laki_laki',
        'jml_perempuan',
        'bts_wil_utara',
        'bts_wil_timur',
        'bts_wil_selatan',
        'bts_wil_barat',
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
