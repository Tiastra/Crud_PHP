<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $fillable = ['descricao_curso', 'data_inicio', 'data_fim', 'quantidade_alunos', 'categoria_id'];

//    use HasFactory;

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }


}
