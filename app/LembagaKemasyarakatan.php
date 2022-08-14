<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembagaKemasyarakatan extends Model
{
    protected $table = 'lembaga_kemasyarakatan';
    protected $fillable = [
        'desa_id', 'kglembagakemasyarakatan_id', 'dasarhukumpembentukan', 'jumlah_lembaga', 'jumlah_pengurus', 'ruang_lingkup_kegiatan', 'jumlah_jenis_kegiatan'
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

    public function kglembagakemasyarakatan()
    {
        return $this->belongsTo('App\KgLembagaKemasyarakatan');
    }
}
