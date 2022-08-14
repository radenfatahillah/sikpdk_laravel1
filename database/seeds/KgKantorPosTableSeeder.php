<?php

use Illuminate\Database\Seeder;

class KgKantorPosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KANTOR POS',
            'KANTOR POS PEMBANTU',
            'TUKANG POS',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKantorPos::create([
                'name' => $name[$i]
            ]);
        }
    }
}
