<?php

use Illuminate\Database\Seeder;

class KategoriDaratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JALAN DESA/KELURAHAN',
            'JALAN ANTAR DESA/KELURAHAN/KECAMATAN',
            'JALAN KABUPATEN YANG MELEWATI DESA/KELURAHAN',
            'JALAN PROVINSI YANG MELEWAI DESA/KELURAHAN',
            'PANJANG JALAN NEGARA',
            'JEMBATAN DESA/KELURAHAN',
            'PRASARANA ANGKUTAN DARAT',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KategoriDarat::create([
                'name' => $name[$i]
            ]);
        }
    }
}
