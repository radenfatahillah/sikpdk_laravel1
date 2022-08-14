<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanNonFormal extends Model
{
    protected $table = 'pendidikan_non_formal';
    protected $fillable = [
        'desa_id', 'kgpendidikannonformal_id', 'jumlah', 'status', 'kepemilikan', 'jumlah_pengajar', 'jumlah_siswa',
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

    public function kgpendidikannonformal()
    {
        return $this->belongsTo('App\KgPendidikanNonFormal');
    }
}
