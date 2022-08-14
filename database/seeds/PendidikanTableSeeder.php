<?php

use Illuminate\Database\Seeder;

class PendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TIDAK / BELUM SEKOLAH',
            'BELUM TAMAT SD/SEDERAJAT',
            'TAMAT SD / SEDERAJAT',
            'SLTP/SEDERAJAT',
            'SLTA / SEDERAJAT',
            'DIPLOMA I / II',
            'AKADEMI/ DIPLOMA III/S. MUDA',
            'DIPLOMA IV/ STRATA I',
            'STRATA II',
            'STRATA III',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\Pendidikan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
