<?php

use Illuminate\Database\Seeder;

class PenyandangCacatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'CACAT FISIK',
            'CACAT NETRA/BUTA',
            'CACAT RUNGU/WICARA',
            'CACAT MENTAL/JIWA',
            'CACAT FISIK DAN MENTAL',
            'CACAT LAINNYA',
            'TIDAK CACAT',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\PenyandangCacat::create([
                'name' => $name[$i]
            ]);
        }
    }
}
