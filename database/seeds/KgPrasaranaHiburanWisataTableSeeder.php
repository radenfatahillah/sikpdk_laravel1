<?php

use Illuminate\Database\Seeder;

class KgPrasaranaHiburanWisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JUMLAH TEMPAT WISATA',
            'HOTEL BINTANG 5',
            'HOTEL BINTANG 4',
            'HOTEL BINTANG 3',
            'HOTEL BINTANG 2',
            'HOTEL BINTANG 1',
            'HOTEL MELATI',
            'DISKOTIK',
            'BILYAR',
            'KARAOKE',
            'MUSEUM',
            'RESTORAN',
            'BIOSKOP',

        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaHiburanWisata::create([
                'name' => $name[$i]
            ]);
        }
    }
}
