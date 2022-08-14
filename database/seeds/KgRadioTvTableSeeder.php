<?php

use Illuminate\Database\Seeder;

class KgRadioTvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TV UMUM',
            'JUMLAH RADIO',
            'JUMLAH TV',
            'JUMLAH PARABOLA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgRadioTv::create([
                'name' => $name[$i]
            ]);
        }
    }
}
