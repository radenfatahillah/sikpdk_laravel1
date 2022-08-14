<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsahaJasaPengangkutan extends Model
{
    protected $table = 'usaha_jasa_pengangkutan';
    protected $fillable = [
        'desa_id',
        'kgusahajasapengangkutan_id',
        'kategorijasapengangkutan',
        'jumlah',
        'pemilik',
        'kapasitas',
        'jumlah_tenagakerja',
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

    public function kgusahajasapengangkutan()
    {
        return $this->belongsTo('App\KgUsahaJasaPengangkutan');
    }
}
