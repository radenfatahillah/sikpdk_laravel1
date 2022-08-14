<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IklimJenisKesuburanTanah extends Model
{
    protected $table = 'iklim_jenis_kesuburan_tanah';
    protected $fillable = [
        'desa_id',
        'curah_hujan',
        'jumlah_bulan_hujan',
        'kelembapan',
        'suhu_rata_rata_harian',
        'tinggi_tempat_permukaan_laut',
        'warna_tanah',
        'tekstur_tanah',
        'tk_kemiringan_tanah',
        'lahan_kritis',
        'lahan_terlantar',
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
