<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaGasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'USAHA PENYEWAAN TENAGA LISTRIK',
            'SPBU',
            'PANGKALAN MINYAK TANAH',
            'PENGECER GAS DAN BAHAN BAKAR MINYAK',
            'USAHA AIR MINUM KEMASAN/ISI ULANG'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaGas::create([
                'name' => $name[$i]
            ]);
        }
    }
}
