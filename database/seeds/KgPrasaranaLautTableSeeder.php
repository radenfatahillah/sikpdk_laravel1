<?php

use Illuminate\Database\Seeder;

class KgPrasaranaLautTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JUMLAH TAMBATAN PERAHU',
            'JUMLAH PELABUHAN KAPAL PENUMPANG',
            'JUMLAH PELABUHAN KAPAL BARANG',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaLaut::create([
                'name' => $name[$i]
            ]);
        }
    }
}
