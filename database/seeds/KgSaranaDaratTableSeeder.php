<?php

use Illuminate\Database\Seeder;

class KgSaranaDaratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'BUS UMUM',
            'TRUCK UMUM',
            'ANGKUTAN PER-DESA/KELURAHANAN',
            'OJEK',
            'DELMAN/BENDI/CIDOMO',
            'BECAK',
            'KERETA API',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgSaranaDarat::create([
                'name' => $name[$i]
            ]);
        }
    }
}
