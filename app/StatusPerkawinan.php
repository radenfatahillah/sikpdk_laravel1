<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPerkawinan extends Model
{
    protected $table = 'status_perkawinan';
    protected $fillable = [
        'name',
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

    public function datapenduduk()
    {
        return $this->hasMany('App\DataPenduduk');
    }
}
