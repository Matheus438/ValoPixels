<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function inicio(){
        return view('inicio');
    }
}
