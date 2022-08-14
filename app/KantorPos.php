<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KantorPos extends Model
{
    protected $table = 'kantor_pos';
    protected $fillable = [
        'desa_id', 'kgkantorpos_id', 'jumlah',
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

    public function kgkantorpos()
    {
        return $this->belongsTo('App\KgKantorPos');
    }
}
