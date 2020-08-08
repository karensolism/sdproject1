<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DireccionController extends Controller
{
    public function estados()
    {
    	return view('layouts/direccion/estados');
    	//return 'seccion'
    }
}
