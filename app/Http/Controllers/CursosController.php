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

        $this->validate($request, [
            'descricao_curso' => 'required|max:100',
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'categoria_id' => 'required',
        ]);

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

    public function show($id)
    {
        $cursos = Curso::findOrFail($id);
        return view('cursos.update', ['cursos' => $cursos]);
    }

    public function edit($id)
    {
        $cursos = Curso::findOrFail($id);

        if ($cursos) {
            return view('cursos.update', compact('cursos'));
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
