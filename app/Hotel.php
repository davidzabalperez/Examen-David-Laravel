<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Hotel extends Model
{
    public function clientes(){
    	return $this->hasMany('App/Cliente');
    }
}
