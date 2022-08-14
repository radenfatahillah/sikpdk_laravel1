<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BPD extends Model
{
    protected $table = 'bpd';
    protected $fillable = [
        'name', 'jabatan', 'pendidikan', 'status',
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
}
