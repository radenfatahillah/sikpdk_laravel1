<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanKeagamaan extends Model
{
    protected $table = 'pendidikan_keagamaan';
    protected $fillable = [
        'desa_id', 'kgpendidikankeagamaan_id', 'kategoripendidikan', 'jumlah', 'status', 'pemerintah', 'swasta', 'dll', 'jumlah_pengajar', 'jumlah_siswa',
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

    public function kgpendidikankeagamaan()
    {
        return $this->belongsTo('App\KgPendidikanKeagamaan');
    }
}
