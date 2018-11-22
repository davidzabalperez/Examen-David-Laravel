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
}
