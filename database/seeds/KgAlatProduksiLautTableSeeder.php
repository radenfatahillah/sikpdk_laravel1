<?php

use Illuminate\Database\Seeder;

class KgAlatProduksiLautTableSeeder extends Seeder
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
            'TAMBAH',
            'JERMAL',
            'PANCING',
            'PUKAT',
            'JALA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgAlatProduksiLaut::create([
                'name' => $name[$i]
            ]);
        }
    }
}
