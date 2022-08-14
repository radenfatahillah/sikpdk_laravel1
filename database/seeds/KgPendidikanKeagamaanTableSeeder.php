<?php

use Illuminate\Database\Seeder;

class KgPendidikanKeagamaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'RAUDHATUL ATHFAL',
            'IBTIDAYAH',
            'TSANAWIYAH',
            'ALIYAH',
            'PONPES',
            'PERGURUAN TINGGI',
            'SEMINARI MENENGAH',
            'SEMINARI TINGGI',
            'BIARA',
            'TK/SD',
            'SMP',
            'SMA',
            'KURSUS',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPendidikanKeagamaan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
