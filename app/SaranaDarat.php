<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranaDarat extends Model
{
    protected $table = 'sarana_darat';
    protected $fillable = [
        'desa_id', 'kgsaranadarat_id', 'keberadaan', 'jumlah',
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

    public function kgsaranadarat()
    {
        return $this->belongsTo('App\KgSaranaDarat');
    }
}
