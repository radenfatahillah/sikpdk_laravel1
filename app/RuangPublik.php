<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangPublik extends Model
{
    protected $table = 'ruang_publik';
    protected $fillable = [
        'desa_id', 'kgruangpublik_id', 'keberadaan', 'luas', 'status',
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

    public function kgruangpublik()
    {
        return $this->belongsTo('App\KgRuangPublik');
    }
}
