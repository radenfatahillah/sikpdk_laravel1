<?php

use Illuminate\Database\Seeder;

class KgJasaLembagaKeuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JASA ASURANSI',
            'LEMBAGA KEUANGAN NON BANK',
            'BANK PERKREDITAN RAKYAT',
            'PEGADAIAN',
            'BANK PEMERINTAH',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgJasaLembagaKeuangan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
