<?php

use Illuminate\Database\Seeder;

class KgPrasaranaKesehatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'RUMAH SAKIT UMUM',
            'PUSKESMAS',
            'PUSKESMAS PEMBANTU',
            'POLIKLINIK/BALAI PENGOBATAN',
            'APOTIK',
            'POSYANDU',
            'TOKO OBAT',
            'BALAI PENGOBATAN MASYARAKAT YAYASAN/SWASTA',
            'GUDANG MENYIMPAN OBAT',
            'JUMLAH RUMAH/KANTOR PRAKTEK DOKTER',
            'RUMAH BERSALIN',
            'BALAI KESEHATAN IBU DAN ANAK',
            'RUMAH SAKIT MATA',

        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgPrasaranaKesehatan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
