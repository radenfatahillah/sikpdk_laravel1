<?php

use Illuminate\Database\Seeder;

class KgKehutananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'TANAH HUTAN',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgKehutanan::create([
                'name' => $name[$i]
            ]);
        }
    }
}
