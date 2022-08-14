<?php

use Illuminate\Database\Seeder;

class KgTeleponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TELEPON UMUM (UNIT)',
            'WARTEL (UNIT)',
            'WARNET (UNIT)',
            'JUMLAH PELANGGAN TELKOM (KK)',
            'JUMLAH PELANGGAN GSM (ORANG)',
            'JUMLAH PELANGGAN CDMA (ORANG)',
            'SINYAL TELEPON SELULER/HANDPHONE'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgTelepon::create([
                'name' => $name[$i]
            ]);
        }
    }
}
