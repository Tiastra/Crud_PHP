<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function create()
    {
        return view('cursos.form');
    }

    public function store(Request $request, Curso $curso)
    {
        $insert = $curso->create($request->all());
        if ($insert){
            return redirect()
                ->route('listar_cursos')
                ->with('success', 'Curso inserido com sucesso!');
        }
        return redirect()
            ->back()
            ->with('error', 'Falha ao inserir');
    }

    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }
}
