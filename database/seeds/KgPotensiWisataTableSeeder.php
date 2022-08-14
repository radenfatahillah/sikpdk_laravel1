<?php

use Illuminate\Database\Seeder;

class KgPotensiWisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['LAUT (WISATA PULAU, TAMAN LAUT, SITUS SEJARAH BAHARI, PANTAI, DLL)',
                'DANAU (WISATA AIR, HUTAN WISATA, SITUS PURBALAKA, DLL)',
                'GUNUNG (WISATA HUTAN, TAMAN NASIONAL, BUMI PERKEMAHAN, DLL)',
                'AGROWISATA',
                'HUTAN KHUSUS',
                'GOA',
                'CAGAR BUDAYA',
                'ARUNG JERAM',
                'SITUS SEJARAH DAN MUSEUM',
                'AIR TERJUN',
                'PADANG SAVANA (WISATA PADANG SAVANA)'];
        
        for($i=0;$i<count($name);$i++){
            App\KgPotensiWisata::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
