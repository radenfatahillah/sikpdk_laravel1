<?php

use Illuminate\Database\Seeder;

class SHDKTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['KEPALA KELUARGA',
                 'SUAMI',
                 'ISTRI',
                 'ANAK',
                 'MENANTU',
                 'CUCU',
                 'ORANGTUA',
                 'MERTUA',
                 'FAMILY LAIN',
                 'PEMBANTU',
                 'LAINNYA'
                 ];
        
        for($i=0;$i<count($name);$i++){
            App\SHDK::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
