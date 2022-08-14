<?php

use Illuminate\Database\Seeder;

class KgPotensiAirSdaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'SUNGAI',
            'DANAU',
            'MATA AIR',
            'BENDUNGAN/WADUK/SITU',
            'EMBUNG-EMBUNG',
            'JEBAKAN AIR',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPotensiAirSda::create([
                'name' => $name[$i]
            ]);
        }
    }
}
