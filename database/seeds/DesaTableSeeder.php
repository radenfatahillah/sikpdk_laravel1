<?php

use Illuminate\Database\Seeder;

class DesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desa')->insert([
            'kode_desa' => '2007',
            'name' => 'BERLIMANG',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2031',
            'name' => 'KUALA PANGKALAN KERAMAT',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2013',
            'name' => 'KUBANGGA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2005',
            'name' => 'LELA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2024',
            'name' => 'MATANG SEGANTAR',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2030',
            'name' => 'MEKAR SEKUNTUM',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2025',
            'name' => 'MULIA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2004',
            'name' => 'PEDADA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2022',
            'name' => 'PIPIT TEJA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2006',
            'name' => 'PURINGAN',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2032',
            'name' => 'SABING',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2027',
            'name' => 'SAMUSTIDA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2021',
            'name' => 'SAYANG SEDAYU',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2029',
            'name' => 'SEBAGU',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2002',
            'name' => 'SEKURA',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2009',
            'name' => 'SENGAWANG',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2011',
            'name' => 'SEPADU',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2008',
            'name' => 'SUNGAI BARU',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2001',
            'name' => 'SUNGAI KUMPAI',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2020',
            'name' => 'SUNGAI SERABEK',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2012',
            'name' => 'TAMBATAN',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2028',
            'name' => 'TANJUNG KERACUT',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2010',
            'name' => 'TELUK KASEH',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2026',
            'name' => 'TELUK KEMBANG',
        ]);

        DB::table('desa')->insert([
            'kode_desa' => '2003',
            'name' => 'TRI MANDAYAN',
        ]);
    }
}
