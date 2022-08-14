<?php

use Illuminate\Database\Seeder;

class KgAirPanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'GUNUNG BERAPI',
            'GEISER',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgAirPanas::create([
                'name' => $name[$i]
            ]);
        }
    }
}
