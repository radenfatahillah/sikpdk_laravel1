<?php

use Illuminate\Database\Seeder;

class AgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'ISLAM',
            'KRISTEN',
            'KATHOLIK',
            'HINDU',
            'BUDHA',
            'KONGHUCU',
            'KEPERCAYAAN'
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\Agama::create([
                'name' => $name[$i]
            ]);
        }
    }
}
