<?php

use Illuminate\Database\Seeder;

class KgPrasaranaEnergiPeneranganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LISTRIK PLN',
            'DIESEL UMUM',
            'GENSET PRIBADI',
            'LAMPU MINYAK TANAH/JARAK/KELAPA',
            'KAYU BAKAR',
            'BATU BARA',
            'TANPA PENERANGAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaEnergiPenerangan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
