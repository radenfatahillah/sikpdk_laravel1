<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilKecamatan extends Model
{
    protected $table = 'profil_kecamatan';
    protected $fillable = [
        'id',
        'kec',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'provinsi_nama',
        'kabupaten_nama',
        'kecamatan_nama',
        'alamat',
        'kode_pos',
        'telepon',
        'email',
        'tahun_pembentukan',
        'dasar_pembentukan',
        'nama_camat',
        'sekretaris_camat',
        'kepsek_pemerintahan_umum',
        'kepsek_kesejahteraan_masyarakat',
        'kepsek_pemberdayaan_masyarakat',
        'kepsek_pelayanan_umum',
        'kepsek_trantib',
        'file_struktur_organisasi',
        'file_logo',
        'visi',
        'misi'
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
