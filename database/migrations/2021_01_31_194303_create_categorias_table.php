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
            $table->increments('id')->nullable(false);
            $table->string('descricao', '30')->nullable(false);
            $table->timestamps();
        });

        DB::table('categorias')->insert(
            array(
                array('id' => 1 , 'descricao' => 'Comportamental'),
                array('id' => 2 , 'descricao' => 'Programação'),
                array('id' => 3 , 'descricao' => 'Qualidade'),
                array('id' => 4 , 'descricao' => 'Processos')
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
