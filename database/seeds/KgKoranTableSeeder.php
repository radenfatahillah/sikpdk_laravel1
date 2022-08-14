<?php

use Illuminate\Database\Seeder;

class KgKoranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KORAN/SURAT KABAR',
            'MAJALAH',
            'PAPAN IKLAN/ REKLAME',
            'PAPAN PENGUMUMAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKoran::create([
                'name' => $name[$i]
            ]);
        }
    }
}
