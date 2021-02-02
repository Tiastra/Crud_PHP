<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('cursos', CursosController::class);

Route::get('cursos/novo', [CursosController::class, 'create']);
Route::post('cursos/novo', [CursosController::class, 'store'])->name('criar_curso');
Route::get('cursos/lista', [CursosController::class, 'index'])->name('listar_cursos');
Route::get('cursos/editar/{id}', [CursosController::class, 'edit'])->name('editar_curso');
Route::put('cursos/editar/{id}', [CursosController::class, 'update'])->name('salvar_edicao');
Route::delete('cursos/deletar/{id}', [CursosController::class, 'destroy'])->name('deletar_curso');
