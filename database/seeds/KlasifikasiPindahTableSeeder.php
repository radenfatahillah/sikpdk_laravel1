<?php

use Illuminate\Database\Seeder;

class KlasifikasiPindahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'DALAM SATU DESA/KELURAHAN',
            'ANTAR KELURAHAN DALAM SATU KECAMATAN',
            'ANTAR KECAMATAN DALAM SATU KOTA',
            'ANTAR KOTA/KABUPATEN DALAM SATU PROVINSI',
            'ANTAR PROVINSI',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KlasifikasiPindah::create([
                'name' => $name[$i]
            ]);
        }
    }
}
