<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Vistas publicas
    public function inicio(){
        return view('inicio');
    }
}
