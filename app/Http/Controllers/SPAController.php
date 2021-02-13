<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPAController extends Controller
{
    public function home (){
    	return view('spa');
    } 
}
