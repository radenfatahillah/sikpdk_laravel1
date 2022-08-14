<?php

use Illuminate\Database\Seeder;

class KgPrasaranaUdaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LAPANGAN TERBANG NASIONAL/INTERNASIONAL',
            'LAPANGAN TERBANG PERINTIS',
            'LAPANGAN TERBANG DOMESTIK',
            'HELIPAD',
            'LAPANGAN TERBANG KOMERSIAL',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaUdara::create([
                'name' => $name[$i]
            ]);
        }
    }
}
