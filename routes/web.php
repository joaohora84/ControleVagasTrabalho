<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\SessionController;

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
    return view('pages.home');
});

Route::get('empresa', [EmpresaController::class, 'showForm'])->name('empresa.showForm');
Route::post('empresa', [EmpresaController::class, 'cadastro'])->name('empresa.cadastro');
Route::get('empresa_editar/{id}', [EmpresaController::class, 'editar'])->name('empresa.editar');
Route::post('empresa_atualizar/{id}', [EmpresaController::class, 'atualizar'])->name('empresa.atualizar');
Route::get('empresa_deletar/{id}', [EmpresaController::class, 'deletar'])->name('empresa.deletar');
Route::get('empresas', [EmpresaController::class, 'getEmpresa'])->name('empresa.list');
//Route::get('empresa/{nome}', [EmpresaController::class, 'getEmpresaPorNome'])->name('empresa.nome');
//Route::get('empresa/{cidade}', [EmpresaController::class, 'getEmpresaPorCidade'])->name('empresa.cidade');
//Route::get('empresa/{uf}', [EmpresaController::class, 'getEmpresaPorUf'])->name('empresa.uf');
Route::get('empresa/busca', [EmpresaController::class, 'getEmpresaPorParametro'])->name('empresa.busca');

Route::get('vaga', [VagaController::class, 'showForm'])->name('vaga.showForm');
Route::post('vaga', [VagaController::class, 'cadastro'])->name('vaga.cadastro');
Route::get('vaga_editar/{id}', [VagaController::class, 'editar'])->name('vaga.editar');
Route::post('vaga_atualizar/{id}', [VagaController::class, 'atualizar'])->name('vaga.atualizar');
Route::get('vaga_deletar/{id}', [VagaController::class, 'deletar'])->name('vaga.deletar');
Route::get('vagas', [VagaController::class, 'getVagas'])->name('vaga.list');
//Route::get('vaga/{idEmpresa}', [VagaController::class, 'getVagaPorEmpresa'])->name('vaga.empresa');
//Route::get('vaga/{cargo}', [VagaController::class, 'getVagaPorCargo'])->name('vaga.cargo');
//Route::get('vaga/{cidade}', [VagaController::class, 'getVagaPorCidade'])->name('vaga.cidade');
//Route::get('vaga/{uf}', [VagaController::class, 'getVagaPorUf'])->name('vaga.uf');
Route::get('vaga/busca', [VagaController::class, 'getVagaPorParametro'])->name('vaga.busca');


Route::get('candidato', [CandidatoController::class, 'showForm'])->name('candidato.showForm');
Route::post('cadastro', [CandidatoController::class, 'cadastro'])->name('candidato.cadastro');
Route::get('candidato_editar/{id}', [CandidatoController::class, 'editar'])->name('candidato.editar');
Route::post('candidato_atualizar/{id}', [CandidatoController::class, 'atualizar'])->name('candidato.atualizar');
Route::get('candidato_deletar/{id}', [CandidatoController::class, 'deletar'])->name('candidato.deletar');
Route::get('candidatos', [CandidatoController::class, 'getCandidato'])->name('candidato.list');
//Route::get('candidato/{cargo}', [CandidatoController::class, 'getCandidatoPorCargo'])->name('candidato.cargo');
//Route::get('candidato/{cidade}', [CandidatoController::class, 'getCandidatoPorCidade'])->name('candidato.cidade');
//Route::get('candidato/{uf}', [CandidatoController::class, 'getCandidatoPorUf'])->name('candidato.uf');
Route::get('candidato/busca', [CandidatoController::class, 'getCandidatoPorParametro'])->name('candidato.busca');


Route::get('session/get', [SessionController::class, 'getSession'])->name('session.get');
Route::get('session/set', [SessionController::class, 'setSession'])->name('session.set');
Route::get('session/remove', [SessionController::class, 'removeSession'])->name('session.remove');

Route::get('session/all', [SessionController::class, 'sessionAll']);



