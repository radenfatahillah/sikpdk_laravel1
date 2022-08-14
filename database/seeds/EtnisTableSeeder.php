<?php

use Illuminate\Database\Seeder;

class EtnisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'MELAYU',
            'TIONGHOA',
            'DAYAK',
            'SUNDA',
            'JAWA',
            'BATAK',
            'MADURA',
            'BETAWI',
            'MINANGKABAU',
            'BUGIS',
            'BANJAR',
            'BALI',
            'KUTAI',
            'ARAB',
            'ACEH',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\Etnis::create([
                'name' => $name[$i]
            ]);
        }
    }
}
