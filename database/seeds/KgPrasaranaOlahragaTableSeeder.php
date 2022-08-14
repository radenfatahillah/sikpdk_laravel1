<?php

use Illuminate\Database\Seeder;

class KgPrasaranaOlahragaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LAPANGAN SEPAK BOLA',
            'LAPANGAN BULU TANGKIS',
            'MEJA PINGPONG',
            'LAPANGAN TENIS',
            'LAPANGAN VOLLY',
            'LAPANGAN GOLF',
            'PACUAN KUDA',
            'LAPANGAN BASKET',
            'PUSAT KEBUGARAN',
            'GELANGGANG REMAJA',
            'ARUM JERAM',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaOlahraga::create([
                'name' => $name[$i]
            ]);
        }
    }
}
