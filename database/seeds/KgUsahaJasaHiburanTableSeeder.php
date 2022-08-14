<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaHiburanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'BIOSKOP',
            'FILM KELILING',
            'SANDIWARA/DRAMA',
            'GROUP LAWAK',
            'SIRKUS KELILING/TOPENG MONYET/ONDEL-ONDEL, DLL',
            'WAYANG ORANG/WAYANG GOLEK',
            'GROUP MUSIK/BAND',
            'GROUP VOKAL/PADUAN SUARA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaHiburan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
