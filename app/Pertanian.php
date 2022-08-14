<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanian extends Model
{
    protected $table = 'pertanian';
    protected $fillable = [
        'desa_id',
        'pangan_kurang5ha',
        'pangan_5_10ha',
        'pangan_10_50ha',
        'pangan_50_100ha',
        'pangan_100_500ha',
        'pangan_500_1000ha',
        'pangan_lebih1000ha',
        'pangan_memilikilahan',
        'pangan_tidakmemilikilahan',
        'pangan_totallahan',
        'buah_kurang5ha',
        'buah_5_10ha',
        'buah_10_50ha',
        'buah_50_100ha',
        'buah_100_500ha',
        'buah_500_1000ha',
        'buah_lebih1000ha',
        'buah_memilikilahan',
        'buah_tidakmemilikilahan',
        'buah_totallahan',
        'kebun_kurang5ha',
        'kebun_5_10ha',
        'kebun_10_50ha',
        'kebun_50_100ha',
        'kebun_100_500ha',
        'kebun_500_1000ha',
        'kebun_lebih1000ha',
        'kebun_memilikilahan',
        'kebun_tidakmemilikilahan',
        'kebun_totallahan',
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
