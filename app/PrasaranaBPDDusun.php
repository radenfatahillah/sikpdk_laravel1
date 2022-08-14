<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaBPDDusun extends Model
{
    protected $table = 'prasarana_bpddusun';
    protected $fillable = [
        'desa_id',
        'gedung_kantor_bpd',
        'kondisi_gedung_kantor_bpd',
        'jumlah_ruang_kerja_bpd',
        'balai_bpd',
        'listrik_bpd',
        'air_bersih_bpd',
        'telepon_bpd',
        'jumlah_mesin_tik_bpd',
        'jumlah_meja_bpd',
        'jumlah_kursi_bpd',
        'jumlah_almari_arsip_bpd',
        'komputer_bpd',
        'mesin_fax_bpd',
        'buku_adm_agt_bpd',
        'buku_adm_kgt_bpd',
        'buku_kgt_bpd',
        'buku_perda_bpd',
        'gedung_kantor_dusun',
        'atk_dusun',
        'barang_inventaris_dusun',
        'buku_administrasi_dusun',
        'jenis_kegiatan_dusun',
        'jumlah_pengurus_dusun',
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
