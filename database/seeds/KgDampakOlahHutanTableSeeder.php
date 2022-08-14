<?php

use Illuminate\Database\Seeder;

class KgDampakOlahHutanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'PENCEMARAN UDARA',
            'PENCEMARAN AIR',
            'LONGSOR/EROSI',
            'BISING',
            'KERUSAKAN BIOTA/PLASMA NUFTAH HUTAN',
            'KEMUSNAHAN FLORA, FAUNA, DAN SATWA LANGKA',
            'HILANGNYA SUMBER MATA AIR',
            'KEBAKARAN HUTAN',
            'TERJADINYA KEKERINGAN/SULIT AIR',
            'BERUBAHNYA FUNGSI HUTAN',
            'TERJADINYA LAHAN KRITIS',
            'HILANGNYA DAERAH TANGKAPAN AIR (CACTHMENT AREA)',
            'MUSNAHNYA HABITAT BINATANG HUTAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgDampakOlahHutan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
