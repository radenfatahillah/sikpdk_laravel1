<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaPemerintahan extends Model
{
    protected $table = 'prasarana_pemerintahan';
    protected $fillable = [
        'desa_id',
        'gedung_kantor_desa',
        'kondisi_gedung_kantor_desa',
        'jumlah_ruang_kerja_desa',
        'balai_desa',
        'listrik_desa',
        'air_bersih_desa',
        'telepon_desa',
        'rumah_dinas_kepala_desa',
        'rumah_dinas_perangkat_desa',
        'jumlah_mesin_tik_desa',
        'jumlah_meja_desa',
        'jumlah_kursi_desa',
        'jumlah_almari_arsip_desa',
        'komputer_desa',
        'mesin_fax_desa',
        'kendaraan_dinas_desa',
        'buku_data_peraturan_desa',
        'buku_keputusan_kepala_desa',
        'buku_administrasi_kependudukan',
        'buku_data_inventaris',
        'buku_data_aparat',
        'buku_data_tanah_desa',
        'buku_administrasi_pajak',
        'buku_data_tanah',
        'buku_laporan_pengaduan_masyarakat',
        'buku_agenda_ekspedisi',
        'buku_profil_desa',
        'buku_data_induk_kependudukan',
        'buku_data_mutasi_penduduk',
        'buku_rekap_jumlah_pdk_akhirbulan',
        'buku_registrasi_pelayanan_penduduk',
        'buku_data_penduduk_sementara',
        'buku_anggaran_penerimaan',
        'buku_anggaran_pengeluaran_pegawai',
        'buku_kas_umum_desa',
        'buku_kas_pembantu_penerimaan',
        'buku_kas_pembantu_pengeluaran_rutin',
        'buku_data_lembaga_kemasyarakatan',
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
