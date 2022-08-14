<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranaKesehatan extends Model
{
    protected $table = 'sarana_kesehatan';
    protected $fillable = [
        'desa_id', 'kgsaranakesehatan_id', 'jumlah',
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

    public function kgsaranakesehatan()
    {
        return $this->belongsTo('App\KgSaranaKesehatan');
    }
}
