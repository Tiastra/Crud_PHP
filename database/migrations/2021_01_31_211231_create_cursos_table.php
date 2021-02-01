<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id_curso')->nullable(false);
            $table->string('descricao_curso', '100')-> nullable (false);
            $table->date('data_inicio')-> nullable (false);
            $table->date('data_fim')-> nullable (false);
            $table->integer('quantidade_alunos')-> nullable ();
            $table->integer('categoria')-> nullable (false)->unsigned();
            $table->foreign('categoria')->references('codigo')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
