<?php

use Illuminate\Database\Seeder;

class KgPendidikanNonFormalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KOMPUTER',
            'SENI MUSIK',
            'MONTIR',
            'MENJAHIT',
            'DRAFTER',
            'BAHASA',
            'MESIN',
            'SATPAM',
            'BELADIRI',
            'MENGEMUDI',
            'KECANTIKAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPendidikanNonFormal::create([
                'name' => $name[$i]
            ]);
        }
    }
}
