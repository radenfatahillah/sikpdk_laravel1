<?php

use Illuminate\Database\Seeder;

class KgSumberAirBersihTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'MATA AIR',
            'SUMUR GALI',
            'SUMUR POMPA',
            'HIDRAN UMUM',
            'PAM',
            'PIPA',
            'SUNGAI',
            'EMBUNG',
            'BAK PENAMPUNG AIR HUJAN',
            'BELI DARI TANGKI SWASTA',
            'DEPOT AIR ULANG',
            'SUMBER LAIN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgSumberAirBersih::create([
                'name' => $name[$i]
            ]);
        }
    }
}
