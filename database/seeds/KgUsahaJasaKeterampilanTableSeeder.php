<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaKeterampilanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TUKANG KAYU',
            'TUKANG BATU',
            'TUKANG JAHIT/BORDIR',
            'TUKANG CUKUR',
            'TUKANG SERVICE ELEKTRONIK',
            'TUKANG BESI',
            'TUKANG GALI SUMUR',
            'TUKANG PIJAT/URUT/PENGOBATAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaKeterampilan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
