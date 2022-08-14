<?php

use Illuminate\Database\Seeder;

class KgKomoditasBuahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KOPI',
            'DUKU',
            'LANGSAT',
            'ALPUKAT',
            'APEL',
            'NANAS',
            'MANGGA',
            'RAMBUTAN',
            'PEPAYA',
            'SALAK',
            'ANGGUR',
            'MELON',
            'JERUK',
            'KELAPA DALAM',
            'KELAPA HIBRIDA',
            'KOPI ROBUSTA',
            'KOPI ARABIKA',
            'CENGKEH',
            'KAKAO',
            'JAMBU METE',
            'KAPOK',
            'LADA',
            'TEMBAKAU VIRGINIA',
            'AREN',
            'LONTAR',
            'KELAPA GENJAH',
            'KAPAS',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKomoditasBuah::create([
                'name' => $name[$i]
            ]);
        }
    }
}
