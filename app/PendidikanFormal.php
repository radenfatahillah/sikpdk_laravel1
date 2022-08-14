<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanFormal extends Model
{
    protected $table = 'pendidikan_formal';
    protected $fillable = [
        'desa_id', 'kgpendidikanformal_id', 'jumlah', 'status', 'pemerintah', 'swasta', 'desa', 'jumlah_pengajar', 'jumlah_siswa',
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

    public function kgpendidikanformal()
    {
        return $this->belongsTo('App\KgPendidikanFormal');
    }
}
