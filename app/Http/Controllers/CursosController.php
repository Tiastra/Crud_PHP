<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function create(){
        return view('cursos.create');
    }
}
