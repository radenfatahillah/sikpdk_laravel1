<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['HIDUP',
                 'MENINGGAL',
                 'PINDAH DATANG',
                 'PINDAH KELUAR'];
        
        for($i=0;$i<count($name);$i++){
            App\Status::create([
                'name'=> $name[$i]
            ]);
    }
}

}
