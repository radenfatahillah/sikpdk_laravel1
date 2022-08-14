<?php

use Illuminate\Database\Seeder;

class KgAlatProduksiTawarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KARAMBA',
            'EMPANG/KOLAM',
            'DANAU',
            'RAWA',
            'SUNGAI',
            'SAWAH',
            'JALA',
            'PANCINGAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgAlatProduksiTawar::create([
                'name' => $name[$i]
            ]);
        }
    }
}
