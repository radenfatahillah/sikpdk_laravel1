<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koran extends Model
{
    protected $table = 'koran';
    protected $fillable = [
        'desa_id', 'kgkoran_id', 'status',
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

    public function kgkoran()
    {
        return $this->belongsTo('App\KgKoran');
    }
}
