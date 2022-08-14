<?php

use Illuminate\Database\Seeder;

class KgPrasaranaSaranaKebersihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TEMPAT PEMBUANGAN SEMENTARA (TPS)',
            'TEMPAT PEMBUANGAN AKHIR (TPA)',
            'ALAT PENGHANCUR SAMPAH/INCINERATOR',
            'JUMLAH GEROBAK SAMPAH',
            'JUMLAH TONG SAMPAH',
            'JUMLAH TRUCK PENGANGKUT SAMPAH',
            'JUMLAH SATGAS KEBERSIHAN',
            'JUMLAH ANGGOTA SATGAS KEBERSIHAN',
            'JUMLAH PEMULUNG',
            'TEMPAT PENGELOLAAN SAMPAH',
            'PENGELOLAAN SAMPAH LINGKUNGAN/RT',
            'PENGELOLA SAMPAH LAINNYA',

        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaSaranaKebersihan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
