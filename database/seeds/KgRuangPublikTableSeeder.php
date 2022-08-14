<?php

use Illuminate\Database\Seeder;

class KgRuangPublikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TAMAN KOTA',
            'TAMAN BERMAIN',
            'HUTAN KOTA',
            'TAMAN DESA/KELURAHAN',
            'TANAH KAS DESA',
            'TANAH ADAT'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgRuangPublik::create([
                'name' => $name[$i]
            ]);
        }
    }
}
