<?php

use Illuminate\Database\Seeder;

class KgKondisiHutanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'HUTAN BAKAU/MANGROVE',
            'HUTAN PRODUKSI',
            'HUTAN LINDUNG',
            'HUTAN SUAKA MARGASATWA',
            'HUTAN SUAKA ALAM',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKondisiHutan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
