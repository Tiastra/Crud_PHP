@extends('layout.app')
@section('title', 'Registro')

@section('content')
    <h1>Registro</h1>
    <hr>

    <div class="container">
        <form action="{{ route('criar_curso') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <span class="card-title">
                        Criando novo registro
                    </span>
                </div>
                <div class="card-body">
                    <div class="form-row form-group">
                        <label for="descricao_curso" class="col-form-label col-sm-2 text-right"> Curso </label>
                        <div class="col-sm-4">
                            <input name="descricao_curso" class="form-control" placeholder="Defina o nome" required>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="data_inicio" class="col-form-label col-sm-2 text-right"> Data de Início </label>
                        <div class="col-sm-4">
                            <input type="date" name="data_inicio" class="form-control" placeholder="Defina a data" required>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="data_fim" class="col-form-label col-sm-2 text-right"> Data de Término </label>
                        <div class="col-sm-4">
                            <input type="date" name="data_fim" class="form-control" placeholder="Defina a data" required>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="quantidade_alunos" class="col-form-label col-sm-2 text-right"> Máximo alunos/turma </label>
                        <div class="col-sm-4">
                            <input type="number" name="quantidade_alunos" class="form-control" placeholder="Defina a quantidade">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <label for="categoria_id" class="col-form-label col-sm-2 text-right"> Categoria </label>
                        <div class="col-sm-4">
                            <select name="categoria_id" class="form-control"  required>
                                <option value="" disabled selected>Selecione uma categoria</option>
                            @if($categorias->count())
                                @foreach ( $categorias as $categoria )

                                <option value="{{ $categoria->id }}"> {{ $categoria->descricao }} </option>

                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">Nenhum registro encontrado</td>
                                </tr>
                            @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                    <button class="btn btn-danger btn-sm"
                            onclick="window.location = 'http://localhost:8000/cursos/lista'; return false;">Cancelar
                    </button>

                    <input value="Salvar" type="submit" class="btn btn-success btn-sm" >
                </div>
            </div>
        </form>
    </div>
@endsection
