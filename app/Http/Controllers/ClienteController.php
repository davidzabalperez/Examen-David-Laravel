<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function show()
        {
        	$clientes = Cliente::all();
            return view('cliente.index', [
            	'clientes'=>$clientes
            ]);
        }
    /*public function add(Request $request)
    {
    	DB::table('clientes')->insert(
    
    	$nombre = $request->Input('nif');
    	$nombre = $request->Input('nombre');
    	$nombre = $request->Input('apellido');
    	$nombre = $request->Input('telefono');
    	)
    }*/
}
