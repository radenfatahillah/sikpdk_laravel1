<?php

use Illuminate\Database\Seeder;

class KgKebisinganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KEBISINGAN TINGKAT TINGGI',
            'KEBISINGAN TINGKAT SEDANG',
            'KEBISINGAN TINGKAT RINGAN',
            'TIDAK BISING'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKebisingan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
