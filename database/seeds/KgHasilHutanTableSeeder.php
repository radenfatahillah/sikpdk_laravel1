<?php

use Illuminate\Database\Seeder;

class KgHasilHutanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KAYU',
            'MADU LEBAH',
            'ROTAN',
            'DAMAR',
            'BAMBU',
            'JATI',
            'NILAM',
            'LONTAR',
            'SAGU',
            'ENAU',
            'MAHONI',
            'CEMARA',
            'KAYU CENDANA',
            'KAYU GAHARU',
            'SARANG BURUNG',
            'MERANTI',
            'MINYAK KAYU PUTIH',
            'GULA ENAU',
            'GULA LONTAR',
            'ARANG',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgHasilHutan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
