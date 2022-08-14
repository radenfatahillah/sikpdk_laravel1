<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaPerdaganganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PASAR HASIL BUMI/TRADISIONAL/HARIAN',
            'PASAR MINGGUAN',
            'PASAR BULANAN',
            'PASAR KAGET/PASAR KHUSUS',
            'JUMLAH USAHA TOKO/KIOS',
            'SWALAYAN',
            'WARUNG SERBA ADA',
            'TOKO KELONTONG',
            'USAHA PETERNAKAN',
            'USAHA PERIKANAN',
            'USAHA PERKEBUNAN',
            'USAHA MINUMAN (KEMASAN, DLL)',
            'INDUSTRI FARMASI',
            'INDUSTRI CAROSERI/CAT MOBIL',
            'INDUSTRI PENYAMAKAN KULIT',
            'PENITIPAN KENDARAAN BERMOTOR',
            'INDUSTRI PERAKITAN ELEKTRONIK',
            'PENGOLAHAN KAYU',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaPerdagangan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
