<?php

use Illuminate\Database\Seeder;

class KgSaranaKesehatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'JUMLAH DOKTER UMUM',
            'JUMLAH DOKTER GIGI',
            'JUMLAH DOKTER SPESIALIS LAINYYA',
            'JUMLAH PARAMEDIS',
            'JUMLAH DUKUN BERSALIN TERLATIH',
            'BIDAN',
            'PERAWAT',
            'DUKUN PENGOBATAN ALTERNATIF',
            'JUMLAH DOKTER PRAKTEK',
            'LABORATORIUM KESEHATAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgSaranaKesehatan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
