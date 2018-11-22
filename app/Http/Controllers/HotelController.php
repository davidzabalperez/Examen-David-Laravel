<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function show()
    {
    	$hoteles = Hotel::all();
    	return view(
    		'hotel.index',[
    			'hoteles'=>$hoteles
    		]
    	);
    }
}
