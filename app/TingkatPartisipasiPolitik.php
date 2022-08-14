<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatPartisipasiPolitik extends Model
{
    protected $table = 'tingkat_partisipasi_politik';
    protected $fillable = [
        'desa_id', 'kgtingkatpartisipasipolitik_id', 'punyahakpilih_lakilaki', 'punyahakpilih_perempuan', 'manfaathakpilih_lakilaki', 'manfaathakpilih_perempuan'
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

    public function kgtingkatpartisipasipolitik()
    {
        return $this->belongsTo('App\KgTingkatPartisipasiPolitik');
    }
}
