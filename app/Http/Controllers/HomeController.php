<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   
    public function home()
    {
    	return view('home');
    }

    public function contatti()
    {
    	return view('contatti');
    }
   
}