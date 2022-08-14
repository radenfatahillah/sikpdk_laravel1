<?php

use Illuminate\Database\Seeder;

class KgTanamanApotikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JAHE',
            'KUNYIT',
            'LENGKUAS',
            'MENGKUDU',
            'DAUN DEWA',
            'KUMIS KUCING',
            'BUAH MERAH',
            'SAMBILOTO',
            'TEMULAWAK',
            'TEMU HITAM',
            'TEMU PUTIH',
            'TEMU PUTRI',
            'TEMU KUNCI',
            'DAUN SIRIH',
            'KAYU MANIS',
            'MAHKOTA DEWA',
            'AKAR WANGI',
            'KENCUR',
            'JAMUR',
            'DEWI-DEWI',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgTanamanApotik::create([
                'name' => $name[$i]
            ]);
        }
    }
}
