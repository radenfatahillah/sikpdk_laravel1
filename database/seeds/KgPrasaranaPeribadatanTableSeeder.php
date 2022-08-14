<?php

use Illuminate\Database\Seeder;

class KgPrasaranaPeribadatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JUMLAH MASJID',
            'JUMLAH LANGGAR/SURAU/MUSHOLA',
            'JUMLAH GEREJA KRISTEN PROTESTAN',
            'JUMLAH GEREJA KATHOLIK',
            'JUMLAH WIHARA',
            'JUMLAH PURA',
            'JUMLAH KLENTENG',

        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaPeribadatan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
