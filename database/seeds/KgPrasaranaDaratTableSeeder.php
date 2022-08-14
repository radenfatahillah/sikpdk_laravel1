<?php

use Illuminate\Database\Seeder;

class KgPrasaranaDaratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PANJANG JALAN ASPAL',
            'PANJANG JALAN MAKADAM',
            'PANJANG JALAN TANAH',
            'PANJANG JALAN SIRTU',
            'PANJANG JALAN KONBLOK/SEMEN/BETON',
            'JUMLAH JEMBATAN BETON',
            'JUMLAH JEMBATAN BESI',
            'JUMLAH JEMBATAN KAYU',
            'JUMLAH PANGKALAN OJEK',
            'JUMLAH STASIUN KA',
            'TERMINAL BIS/ANGKUTAN PEDESAAN/PERKOTAAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaDarat::create([
                'name' => $name[$i]
            ]);
        }
    }
}
