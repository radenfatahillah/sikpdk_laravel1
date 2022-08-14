<?php

use Illuminate\Database\Seeder;

class KgTanamanPanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JAGUNG',
            'KACANG TANAH',
            'KACANG PANJANG',
            'KACANG MERAH',
            'PADI LADANG',
            'UBI KAYU',
            'UBI JALA',
            'CABE',
            'TERONG',
            'TOMAT',
            'SAWI',
            'KUBIS',
            'MENTIMUN',
            'BUNCIS',
            'BAYAM',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgTanamanPangan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
