<?php

use Illuminate\Database\Seeder;

class KgHasilPerkebunanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KELAPA',
            'KELAPA SAWIT',
            'KOPI',
            'CENGKEH',
            'TEMBAKAU',
            'PALA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgHasilPerkebunan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
