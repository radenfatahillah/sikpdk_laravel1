<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTanah extends Model
{
    protected $table = 'data_tanah';
    protected $fillable = [
        'desa_id',
        'sawah_irigasi_teknis',
        'sawah_irigasi_sth_teknis',
        'sawah_tadah_hujan',
        'sawah_pasang_surut',
        'tegal_ladang',
        'pemukiman',
        'pekarangan',
        'tanah_rawa',
        'pasang_surut',
        'lahan_gambut',
        'situ_waduk_danau',
        'perkebunan_rakyat',
        'perkebunan_negara',
        'perkebunan_swasta',
        'perkebunan_perorangan',
        'tanah_bengkok',
        'tanah_titi_sara',
        'kebun_desa',
        'sawah_desa',
        'lapangan_olahraga',
        'perkantoran_pemerintah',
        'ruang_publik',
        'tempat_pemakaman_desa_umum',
        'pembuangan_sampah',
        'bangunan_sekolah_pt',
        'pertokoan',
        'fasilitas_pasar',
        'terminal',
        'jalan',
        'daerah_tangkapan_air',
        'usaha_perikanan',
        'sutet_aliranlistrik',
        'hutan_produksi_tetap',
        'hutan_terbatas',
        'hutan_konservasi',
        'hutan_adat',
        'hutan_asli',
        'hutan_sekunder',
        'hutan_buatan',
        'hutan_mangrove',
        'hutan_rakyat',
        'hutan_lindung',
        'suaka_alam',
        'suaka_margasatwa',

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
