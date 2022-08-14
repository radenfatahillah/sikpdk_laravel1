<?php

use Illuminate\Database\Seeder;

class KgTingkatPartisipasiPolitikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PEMILIHAN KEPALA DESA/LURAH',
            'PEMILIHAN BUPATI/WALIKOTA',
            'PEMILIHAN GUBERNUR',
            'PEMILIHAN PARLEMEN',
            'PEMILIHAN PRESIDEN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgTingkatPartisipasiPolitik::create([
                'name' => $name[$i]
            ]);
        }
    }
}
