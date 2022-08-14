<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KgPrasaranaEnergiPenerangan extends Model
{
    protected $table = 'kg_prasarana_energi_penerangan';
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

    public function prasaranaenergipenerangan()
    {
        return $this->hasMany('App\PrasaranaEnergiPenerangan');
    }
}
