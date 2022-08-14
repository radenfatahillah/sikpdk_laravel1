<?php

use Illuminate\Database\Seeder;

class KgJenisIkanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TUNA',
            'SALMON',
            'TONGKOL/CAKALANG',
            'HIU',
            'KAKAP',
            'TENGGIRI',
            'JAMBAL',
            'PARI',
            'KUWE',
            'BELANAK',
            'CUMI',
            'GURITA',
            'SARDEN',
            'BAWAL',
            'BARONANG',
            'KEMBUNG',
            'IKAN EKOR KUNING',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgJenisIkan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
