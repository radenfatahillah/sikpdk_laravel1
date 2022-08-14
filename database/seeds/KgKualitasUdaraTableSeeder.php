<?php

use Illuminate\Database\Seeder;

class KgKualitasUdaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PABRIK (KAPUR, MARMER, DLL)',
            'KENDARAAN BERMOTOR',
            'PEMBAKARAN HUTAN/LAHAN',
            'GAMBUT',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKualitasUdara::create([
                'name' => $name[$i]
            ]);
        }
    }
}
