<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopografiLetakOrbitasi extends Model
{
    protected $table = 'topografi_letak_orbitasi';
    protected $fillable = [
        'desa_id',
        'daratan_rendah',
        'berbukit_bukit',
        'daratan_tinggi',
        'lereng_gunung',
        'tepi_pantai',
        'kawasan_rawa',
        'kawasan_gambut',
        'aliran_sungai',
        'bantaran_sungai',
        'kawasan_perkantoran',
        'kawasan_pertokoan',
        'kawasan_campuran',
        'kawasan_industri',
        'kepulauan',
        'pantai_pesisir',
        'kawasan_hutan',
        'taman_suaka',
        'kawasan_wisata',
        'batas_negara_lain',
        'batas_provinsi_lain',
        'batas_kabupaten_lain',
        'batas_antar_kecamatan',
        'das_bantaransungai',
        'rawan_banjir',
        'bebas_banjir',
        'potensial_tsunami',
        'rawan_jalur_gempa',
        'jarak_kecamatan',
        'waktu_kecamatan_motor',
        'waktu_kecamatan_nonmotor',
        'jumlah_kendaraanumum_kecamatan',
        'jarak_kabupaten',
        'waktu_kabupaten_motor',
        'waktu_kabupaten_nonmotor',
        'jumlah_kendaraanumum_kabupaten',
        'jarak_provinsi',
        'waktu_provinsi_motor',
        'waktu_provinsi_nonmotor',
        'jumlah_kendaraanumum_provinsi',
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
