<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo Curso</title>
</head>
<body>
<form action="{{ route('criar_curso') }}" method="post">
    @csrf
    <label for="">Descrição do Curso</label><br>
    <input type="text" name="descricao_curso"><br><br>
    <label for="">Data de início</label><br>
    <input type="text" name="data_inicio"><br><br>
    <label for="">Data de término</label><br>
    <input type="text" name="data_fim"><br><br>
    <label for="">Quantidade máxima de alunos</label><br>
    <input type="text" name="quantidade_alunos"><br><br>
    <label for="">Categoria do Curso</label><br>
    <input type="text" name="categoria"><br><br>
    <button>Salvar</button>

</form>
</body>
</html>
