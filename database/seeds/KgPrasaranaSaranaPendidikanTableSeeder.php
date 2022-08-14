<?php

use Illuminate\Database\Seeder;

class KgPrasaranaSaranaPendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'GEDUNG KAMPUS PTN',
            'GEDUNG KAMPUS PTS',
            'GEDUNG SMA/SEDERAJAT',
            'GEDUNG SMP/SEDERAJAT',
            'GEDUNG SD/SEDERAJAT',
            'GEDUNG TK',
            'GEDUNG TEMPAT BERMAIN ANAK',
            'JUMLAH LEMBAGA PENDIDIKAN AGAMA',
            'JUMLAH PERPUSTAKAAN KELILING',
            'PERPUSTAKAAN DESA/KELURAHAN',
            'TAMAN BACAAN'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaSaranaPendidikan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
