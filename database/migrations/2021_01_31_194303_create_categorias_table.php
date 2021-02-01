<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('codigo')->nullable(false);
            $table->string('descricao', '30')->nullable(false);
            $table->timestamps();
        });

        DB::table('categorias')->insert(
            array(
                array('codigo' => 1 , 'descricao' => 'Comportamental'),
                array('codigo' => 2 , 'descricao' => 'Programação'),
                array('codigo' => 3 , 'descricao' => 'Qualidade'),
                array('codigo' => 4 , 'descricao' => 'Processos')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
