@extends('layout.app')
@section('title', 'Registro')

@section('content')
    <h1>Registro</h1>
    <hr>

    <div class="container">
        <form method="POST" action="{{ route('salvar_edicao', ['id' => $cursos->id]) }}">
            @csrf
            <div class="card">
                <div class="card-header">
                    <span class="card-title">
                        Atualizar registro
                    </span>
                </div>
                <div class="card-body">
                    <div class="form-row form-group">
                        <label for="descricao_curso" class="col-form-label col-sm-2 text-right"> Curso </label>
                        <div class="col-sm-4">
                            <input name="descricao_curso" value="{{$cursos->descricao_curso}}" class="form-control" placeholder="Defina o nome">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="data_inicio" class="col-form-label col-sm-2 text-right"> Data de Início </label>
                        <div class="col-sm-4">
                            <input type="date" value="{{$cursos->data_inicio}}" name="data_inicio" class="form-control" placeholder="Defina a data">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="data_fim" class="col-form-label col-sm-2 text-right"> Data de Término </label>
                        <div class="col-sm-4">
                            <input type="date" value="{{$cursos->data_fim}}" name="data_fim" class="form-control" placeholder="Defina a data">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="quantidade_alunos" class="col-form-label col-sm-2 text-right"> Máximo alunos/turma </label>
                        <div class="col-sm-4">
                            <input type="number" value="{{$cursos->quantidade_alunos}}" name="quantidade_alunos" class="form-control" placeholder="Defina a quantidade">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="categoria_id" class="col-form-label col-sm-2 text-right"> Categoria </label>
                        <div class="col-sm-4">
                            <input type="number" value="{{$cursos->categoria_id}}" name="categoria_id" class="form-control" placeholder="Categoria do Curso">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm"
                            onclick="window.location = 'http://localhost:8000/cursos/lista'; return false;">Cancelar
                    </button>
                    <input type="hidden" name="_method" value="put" >
                    <button class="btn btn-success btn-sm">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
