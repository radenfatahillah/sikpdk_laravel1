<?php

use Illuminate\Database\Seeder;

class KgUsahaJasaPengangkutanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'MINI BUS(ANGKUTAN KOTA/DESA)',
            'BUS SEDANG',
            'BUS BESAR',
            'PERAHU MOTOR/KLOTOK ATAU SEJENISNYA',
            'JET BOAT',
            'FERRY/KAPAL PENUMPANG',
            'JET FOIL',
            'PESAWAT RINGAN',
            'HELIKOPTER',
            'TRUK TERBUKA',
            'TRUK TERTUTUP (BOX)',
            'MOBIL PICK UP TERBUKA',
            'MOBIL PICK UP TERTUTUP (BOX)',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgUsahaJasaPengangkutan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
