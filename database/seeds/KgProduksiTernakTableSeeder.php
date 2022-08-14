<?php

use Illuminate\Database\Seeder;

class KgProduksiTernakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'SUSU',
            'KULIT',
            'TELUR',
            'DAGING',
            'MADU',
            'BULU',
            'AIR LIUR BURUNG WALET',
            'MINYAK',
            'HIASAN/LUKISAN',
            'CINDERAMATA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgProduksiTernak::create([
                'name' => $name[$i]
            ]);
        }
    }
}
