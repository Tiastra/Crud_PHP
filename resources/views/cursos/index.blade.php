@extends('layout.app')
@section('title', 'Listando todos os cursos')

@section('content')
    <h1>Lista de Cursos</h1>
    <hr>

    <form method="get" action="{{route('listar_cursos')}}">
        <div class="form-row form-group">

            {!! Form::label('search', 'Buscar Curso', ['class' => 'col-sm-2 col-form-label text-right']) !!}


            <div class="col-sm-8">

                {!! Form::text('search', isset($search) ? $search : null, ['class' => 'form-control']) !!}

            </div>
            <div class="col-sm-2">

                {!! Form::submit('procurar', ['class'=>'btn btn-primary']) !!}

            </div>

        </div>

    </form>

    <div class="container">
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Curso</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Máx. alunos</th>
                <th>categoria</th>
                <th>
                    <a href="{{ route('criar_curso') }}" class="btn btn-info btn-sm" >Cadastrar Novo</a>
                </th>
            </tr>
            </thead>
            <tbody>
    @if($cursos->count())
        @foreach ( $cursos as $curso )
            <tr>
                <td> {{ $curso->id }}</td>
                <td> {{ $curso->descricao_curso }}</td>
                <td> {{ implode("/",array_reverse(explode("-",$curso->data_inicio))) }}</td>
                <td> {{ implode("/",array_reverse(explode("-",$curso->data_fim))) }}</td>
                <td> {{ $curso->quantidade_alunos }}</td>
                <td> {{ $curso->categoria->descricao }}</td>
                <td>
                <a href=" {{ route('editar_curso', ['id' => $curso->id]) }} " class="btn btn-warning btn-sm">Editar</a>
                <form method="POST" action="{{ route('deletar_curso', ['id' => $curso->id]) }}"
                    style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                    @csrf
                    <input type="hidden" name="_method" value="delete" >
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6">Nenhum registro encontrado para listar</td>
        </tr>
    @endif

            </tbody>
        </table>
    </div>
@endsection
