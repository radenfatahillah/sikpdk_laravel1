<?php

use Illuminate\Database\Seeder;

class PendidikanSedangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'BELUM MASUK TK/KELOMPOK BERMAIN',
            'SEDANG TK/KELOMPOK BERMAIN',
            'TIDAK PERNAH SEKOLAH',
            'SEDANG SD/SEDERAJAT',
            'TIDAK TAMAT SD/SEDERAJAT',
            'SEDANG SLTP/SEDERAJAT',
            'SEDANG SLTA/SEDERAJAT',
            'SEDANG D-1/SEDERAJAT',
            'SEDANG D-2/SEDERAJAT',
            'SEDANG D-3/SEDERAJAT',
            'SEDANG S-1/SEDERAJAT',
            'SEDANG S-2/SEDERAJAT',
            'SEDANG S-3/SEDERAJAT',
            'SEDANG SLB A/SEDERAJAT',
            'SEDANG SLB B/SEDERAJAT',
            'SEDANG SLB C/SEDERAJAT',
            'TAMAT SD/SEDERAJAT',
            'TAMAT SLTP/SEDERAJAT',
            'TAMAT SLTA/SEDERAJAT',
            'TAMAT D-1/SEDERAJAT',
            'TAMAT D-2/SEDERAJAT',
            'TAMAT D-3/SEDERAJAT',
            'TAMAT S-1/SEDERAJAT',
            'TAMAT S-2/SEDERAJAT',
            'TAMAT S-3/SEDERAJAT',
            'TAMAT SLB A/SEDERAJAT',
            'TAMAT SLB B/SEDERAJAT',
            'TAMAT SLB C/SEDERAJAT',
            'TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB',
            'TIDAK SEDANG SEKOLAH',

        ];

        for ($i = 0; $i < count($name); $i++) {
            App\PendidikanSedang::create([
                'name' => $name[$i]
            ]);
        }
    }
}
