<?php

use Illuminate\Database\Seeder;

class clientes_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <10 ; $i++) { 
    	DB::table('clientes')->insert([
    			'nif' => str_random(9),
                'nombre' => str_random(6),
                'apellido'=> str_random(6),
                'telefono' => str_random(9)
            ]);	
    	}
    }
}
