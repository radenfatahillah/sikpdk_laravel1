<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgPrasaranaOlahraga extends Model
{
    protected $table = 'kg_prasarana_olahraga';
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

    public function prasaranaolahraga()
    {
        return $this->hasMany('App\PrasaranaOlahraga');
    }
}
