<?php

use Illuminate\Database\Seeder;

class JenisKelaminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LAKI-LAKI',
            'PEREMPUAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\JenisKelamin::create([
                'name' => $name[$i]
            ]);
        }
    }
}
