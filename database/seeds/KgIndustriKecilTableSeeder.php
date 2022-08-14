<?php

use Illuminate\Database\Seeder;

class KgIndustriKecilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'INDUSTRI MAKANAN',
            'INDUSTRI ALAT RUMAH TANGGA',
            'INDUSTRI MATERIAL BAHAN BANGUNAN',
            'INDUSTRI ALAT PERTANIAN',
            'RUMAH MAKAN DAN RESTORAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgIndustriKecil::create([
                'name' => $name[$i]
            ]);
        }
    }
}
