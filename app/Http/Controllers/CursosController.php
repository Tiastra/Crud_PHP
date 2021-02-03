<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class CursosController extends Controller
{

    public function create()
    {
        $categorias = Categoria::all();
        return view('cursos.form', compact('categorias'));
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

    public function index(Request $request)
    {

        $hoje = date('d-m-Y');
        //dd($hoje);

        if ($request->has('search')) {
            $search = $request->get('search');
            $cursos = Curso::where('descricao_curso', 'like', "%{$search}%")->paginate(15);
            $cursos->appends(['search' => $search]);


            return view('cursos.index', compact('cursos', 'search'));
        } else {
            $cursos = Curso::all();
            return view('cursos.index', compact('cursos'));
        }
    }

    public function show($id)
    {
        $cursos = Curso::findOrFail($id);
        return view('cursos.update', ['cursos' => $cursos]);
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $cursos = Curso::findOrFail($id);
        if ($cursos) {
            return view('cursos.update', compact('cursos','categorias'));
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $cursos = Curso::where('id', $id)->update($request->except('_token', '_method'));
        if ($cursos) {
            return redirect()->route('listar_cursos');
        }
    }

    public function destroy($id)
    {
        $cursos = Curso::where('id', $id)->delete();
        if ($cursos) {
            return redirect()->route('listar_cursos');
        }
    }

}
