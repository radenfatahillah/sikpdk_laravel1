<?php

use Illuminate\Database\Seeder;

class KgLembagaEkonomiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'KOPERASI UNIT DESA',
            'KOPERASI SIMPAN PINJAM',
            'KELOMPOK SIMPAN PINJAM',
            'BUMDES',
        ];

        for ($i = 0; $i < count($name); $i++) {
            App\KgLembagaEkonomi::create([
                'name' => $name[$i]
            ]);
        }
    }
}
