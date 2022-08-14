<?php

use Illuminate\Database\Seeder;

class ProfilKecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            '1',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\ProfilKecamatan::create([
                'kec' => $name[$i]
            ]);
        }
    }
}
