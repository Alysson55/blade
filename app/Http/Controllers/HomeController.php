<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function name()
   
    {
        $name = 'name';
        return view('hello', compact('name'));
    }
    
}
