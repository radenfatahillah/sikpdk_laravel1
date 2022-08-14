<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaHukumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'NOTARIS',
            'PENGACARA/ADVOKAT',
            'KONSULTAN MANAJEMEN',
            'KONSULTAN TEKNIS',
            'PEJABAT PEMBUAT AKTA TANAH',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaHukum::create([
                'name' => $name[$i]
            ]);
        }
    }
}
