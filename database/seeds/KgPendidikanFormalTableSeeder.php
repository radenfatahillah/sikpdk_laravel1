<?php

use Illuminate\Database\Seeder;

class KgPendidikanFormalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PLAY GROUP',
            'TK',
            'SD/SEDERAJAT',
            'SMP/SEDERAJAT',
            'SMA/SEDERAJAT',
            'PTN',
            'PTS',
            'SLB',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPendidikanFormal::create([
                'name' => $name[$i]
            ]);
        }
    }
}
