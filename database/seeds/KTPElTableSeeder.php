<?php

use Illuminate\Database\Seeder;

class KTPElTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Ada',
            'Tidak',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KTPEl::create([
                'name' => $name[$i]
            ]);
        }
    }
}
