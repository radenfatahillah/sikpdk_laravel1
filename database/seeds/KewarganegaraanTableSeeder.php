<?php

use Illuminate\Database\Seeder;

class KewarganegaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['WNI','WNA'];
        
        for($i=0;$i<count($name);$i++){
            App\Kewarganegaraan::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
