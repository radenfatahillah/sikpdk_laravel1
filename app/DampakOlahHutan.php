<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DampakOlahHutan extends Model
{
    protected $table = 'dampak_olah_hutan';
    protected $fillable = [
        'desa_id',
        'kgdampakolahhutan_id',
        'dampak',
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

    public function kgdampakolahhutan()
    {
        return $this->belongsTo('App\KgDampakOlahHutan');
    }
}
