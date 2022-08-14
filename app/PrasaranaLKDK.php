<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaLKDK extends Model
{
    protected $table = 'prasarana_lkdk';
    protected $fillable = [
        'desa_id',
        'gedung_kantor_lkd',
        'komputer_lkd',
        'mesin_fax_lkd',
        'mesin_tik_lkd',
        'kardek_lkd',
        'buku_administrasi_lkd',
        'jumlah_meja_kursi_lkd',
        'kantor_lpm',
        'komputer_lpm',
        'mesin_fax_lpm',
        'mesin_tik_lpm',
        'kardek_lpm',
        'buku_administrasi_lmb_lpm',
        'jumlah_meja_kursi_lpm',
        'buku_administrasi_lpm',
        'jenis_kegiatan_lpm',
        'pkk',
        'gedung_pkk',
        'atk_pkk',
        'kepengurusan_pkk',
        'buku_administrasi_pkk',
        'kegiatan_pkk',
        'jumlah_kegiatan_pkk',
        'karang_taruna',
        'kepengurusan_kt',
        'buku_administrasi_kt',
        'jumlah_kegiatan_kt',
        'jumlah_rt',
        'rukun_tetangga',
        'kepengurusan_rt',
        'buku_administrasi_rt',
        'jumlah_kegiatan_rt',
        'jumlah_rw',
        'rukun_warga',
        'kepengurusan_rw',
        'buku_administrasi_rw',
        'jumlah_kegiatan_rw',
        'gedung_lembagaadat',
        'kepengurusan_lembagaadat',
        'buku_administrasi_lembagaadat',
        'jumlah_kegiatan_lembagaadat',
        'bumdes',
        'gedung_bumdes',
        'kepengurusan_bumdes',
        'buku_administrasi_bumdes',
        'jumlah_kegiatan_bumdes',
        'fkkpm',
        'gedung_fkkpm',
        'kepengurusan_fkkpm',
        'buku_administrasi_fkkpm',
        'jumlah_kegiatan_fkkpm',
        'gedung_organisasi_sosial',
        'kepengurusan_sosial',
        'gedung_organisasi_profesi',
        'kepengurusan_organisasi_profesi',
        'buku_administrasi_org_profesi',
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
