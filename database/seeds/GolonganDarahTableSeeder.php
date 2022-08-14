<?php

use Illuminate\Database\Seeder;

class GolonganDarahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['A',
                 'B',
                 'AB',
                 'O',
                 'A+',
                 'A-',
                 'B+',
                 'B-',
                 'AB+',
                 'AB-',
                 'O+',
                 'O-',
                 'TIDAK TAHU'
                 ];
        
        for($i=0;$i<count($name);$i++){
            App\GolonganDarah::create([
                'name'=> $name[$i]
            ]);
        }
    }
}
