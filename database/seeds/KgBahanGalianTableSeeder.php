<?php

use Illuminate\Database\Seeder;

class KgBahanGalianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'BATU KALI',
            'BATU GUNUNG',
            'BATU KAPUR',
            'PASIR',
            'EMAS',
            'NIKEL',
            'BELERANG',
            'BATU MARMER',
            'BATU CADAS',
            'BATU APUNG',
            'PASIR KWARSA',
            'BATUBARA',
            'BATU GRANIT',
            'BATU GAMPING',
            'MANGAN',
            'BATU TRASS',
            'BATU PUTIH',
            'PASIR BATU',
            'PASIR BESI',
            'BATU GIPS',
            'MINYAK BUMI',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgBahanGalian::create([
                'name' => $name[$i]
            ]);
        }
    }
}
