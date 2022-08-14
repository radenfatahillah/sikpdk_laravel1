<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaAirBersih extends Model
{
    protected $table = 'prasarana_airbersih';
    protected $fillable = [
        'desa_id',
        'jumlah_sumur_pompa',
        'jumlah_sumur_gali',
        'jumlah_hidran_umum',
        'jumlah_pah',
        'jumlah_tangki_air_bersih',
        'jumlah_embung',
        'jumlah_mataair',
        'jumlah_bangunan_olah_air',
        'saluran_drainase',
        'sumur_resapan_rt',
        'jumlah_mck_umum',
        'pemilik_jumlah_jamban',
        'kondisi_saluran_drainase',
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
