<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'RADEN FATAHILLAH',
            'desa_id' => 2,
            'telepon' => '081234567890',
            'email' => 'radenfatahillah@gmail.com',
            'password' => bcrypt('raden123'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'HAIDI',
            'desa_id' => 2,
            'telepon' => '08123123123',
            'email' => 'haidi@gmail.com',
            'password' => bcrypt('haidi123'),
        ]);
    }
}
