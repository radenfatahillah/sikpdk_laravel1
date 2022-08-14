<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembagaKeamanan extends Model
{
    protected $table = 'lembaga_keamanan';
    protected $fillable = [
        'desa_id',
        'keberadaanhansip',
        'jumlah_anggota_hansip',
        'jumlah_anggota_satgas_linmas',
        'pelaksanaan_siskamling',
        'jumlah_poskamling',
        'keberadaan_satpam_swakarsa',
        'jumlah_anggota_satpam',
        'nama_organisasi_induk',
        'pemilik_organisasi_swakarsa',
        'keberadaan_organisasi_keamanan',
        'mitra_koramil_tni',
        'jumlah_anggota_trantiblinmas',
        'jumlah_kegiatan_trantiblinmas',
        'babinkamtibmas',
        'jumlah_anggota_babinkamtibmas',
        'jumlah_kegiatan_babinkamtibmas',
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
