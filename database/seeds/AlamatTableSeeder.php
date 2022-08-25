<?php

use Illuminate\Database\Seeder;

class AlamatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alamat')->insert([
            'desa_id' => '2',
            'name' => 'SEKABAU',
            'nama_kadus' => 'APRIADI',
            'status' => 'Aktif',
        ]);
    }
}
