<?php

use Illuminate\Database\Seeder;

class hotels_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <=5 ; $i++) { 
    	DB::table('hotels')->insert([
                'nombre' => str_random(10),
                'direccion' => 'C/'.str_random(10),
                'categoria' => random_int(3,5),
                'completo' => false,
                'antiguedad' => date('2010-11-10')
            ]);	
    	}
    }
}
