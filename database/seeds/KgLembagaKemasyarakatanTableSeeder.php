<?php

use Illuminate\Database\Seeder;

class KgLembagaKemasyarakatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'LKMD/LKMK',
            'LPMD/LPMK ATAU SEBUTAN LAIN',
            'PKK',
            'RUKUN WARGA',
            'RUKUN TETANGGA',
            'KARANG TARUNA',
            'KELOMPOK TANI/NELAYAN',
            'LEMBAGA ADAT',
            'BADAN USAHA MILIK DESA',
            'ORGANISASI KEAGAMAAN',
            'ORGANISASI PEREMPUAN LAIN',
            'ORGANISASI PEMUDA LAINNYA',
            'ORGANISASI PROFESI LAINNYA',
            'ORGANISASI BAPAK',
            'KELOMPOK GOTONG ROYONG',
            'PWI',
            'IDI',
            'PARFI',
            'PECINTA ALAM',
            'WREDATAMA',
            'KELOMPOK PEMIRSA',
            'PANTI ASUHAN',
            'YAYASAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgLembagaKemasyarakatan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
