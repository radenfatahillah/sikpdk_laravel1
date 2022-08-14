<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaEnergiPenerangan extends Model
{
    protected $table = 'prasarana_energi_penerangan';
    protected $fillable = [
        'desa_id', 'kgprasaranaenergipenerangan_id', 'jumlah',
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

    public function kgprasaranaenergipenerangan()
    {
        return $this->belongsTo('App\KgPrasaranaEnergiPenerangan');
    }
}
