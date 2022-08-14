<?php

use Illuminate\Database\Seeder;

class KgJenisPopulasiTernakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'SAPI',
            'KERBAU',
            'BABI',
            'AYAM KAMPUNG',
            'JENIS AYAM BROILER',
            'BEBEK',
            'KUDA',
            'KAMBING',
            'DOMBA',
            'ANGSA',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgJenisPopulasiTernak::create([
                'name' => $name[$i]
            ]);
        }
    }
}
