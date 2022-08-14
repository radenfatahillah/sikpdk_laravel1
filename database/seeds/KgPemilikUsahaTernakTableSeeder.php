<?php

use Illuminate\Database\Seeder;

class KgPemilikUsahaTernakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'DENDENG',
            'ABON',
            'PENYAMAKAN KULIT',
            'MADU LEBAH',
            'BIOGAS',
            'TELUR ASIN',
            'KERUPUK KULIT',
            'KERAJINAN TANGAN (HANDY CRAFF)',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPemilikUsahaTernak::create([
                'name' => $name[$i]
            ]);
        }
    }
}
