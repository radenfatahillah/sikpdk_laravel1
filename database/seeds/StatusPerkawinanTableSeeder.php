<?php

use Illuminate\Database\Seeder;

class StatusPerkawinanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['BELUM KAWIN',
                 'KAWIN TERCATAT',
                 'KAWIN BELUM TERCATAT',
                 'CERAI HIDUP',
                 'CERAI MATI'];
        
        for($i=0;$i<count($name);$i++){
            App\StatusPerkawinan::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
