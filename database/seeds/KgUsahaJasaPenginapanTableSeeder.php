<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaPenginapanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LOSMEN',
            'WISMA',
            'ASRAMA',
            'PERSEWAAN KAMAR',
            'KONTRAKAN RUMAH',
            'MESS',
            'HOTEL',
            'HOME STAY',
            'VILLA',
            'TOWN HOUSE',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaPenginapan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
