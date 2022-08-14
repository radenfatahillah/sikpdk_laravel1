<?php

use Illuminate\Database\Seeder;

class KgSaranaLautTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PERAHU MOTOR',
            'KAPAL ANTAR PULAU',
            'PERAHU TANPA MOTOR',
            'JET BOAT',
            'KAPAL PESIAR',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgSaranaLaut::create([
                'name' => $name[$i]
            ]);
        }
    }
}
