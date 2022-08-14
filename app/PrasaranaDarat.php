<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrasaranaDarat extends Model
{
    protected $table = 'prasarana_darat';
    protected $fillable = [
        'desa_id', 'kgprasaranadarat_id', 'kgdarat_id', 'baik', 'rusak',
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

    public function kgprasaranadarat()
    {
        return $this->belongsTo('App\KgPrasaranaDarat');
    }

    public function kgdarat()
    {
        return $this->belongsTo('App\KategoriDarat');
    }
}
