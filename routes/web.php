<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;

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

Route::get('empresa', [EmpresaController::class, 'showForm']);
Route::post('cadastro', [EmpresaController::class, 'cadastro'])->name('empresa.cadastro');
Route::put('atualizar', [EmpresaController::class, 'atualizar'])->name('empresa.atualizar');
Route::delete('deletar', [EmpresaController::class, 'deletar'])->name('empresa.delete');
Route::get('empresas', [EmpresaController::class, 'getEmpresa'])->name('empresa.list');
Route::get('empresa/{nome}', [EmpresaController::class, 'getEmpresaPorNome'])->name('empresa.nome');
Route::get('empresa/{cidade}', [EmpresaController::class, 'getEmpresaPorCidade'])->name('empresa.cidade');
Route::get('empresa/{uf}', [EmpresaController::class, 'getEmpresaPorUf'])->name('empresa.uf');


Route::get('candidato', [CandidatoController::class, 'showForm']);
Route::post('cadastro', [CandidatoController::class, 'cadastro'])->name('candidato.cadastro');
Route::put('atualizar', [CandidatoController::class, 'atualizar'])->name('candidato.atualizar');
Route::delete('deletar', [CandidatoController::class, 'deletar'])->name('candidato.delete');
Route::get('candidatos', [CandidatoController::class, 'getCandidato'])->name('candidato.list');
Route::get('candidato/{cargo}', [CandidatoController::class, 'getCandidatoPorCargo'])->name('candidato.cargo');
Route::get('candidato/{cidade}', [CandidatoController::class, 'getCandidatoPorCidade'])->name('candidato.cidade');
Route::get('candidato/{uf}', [CandidatoController::class, 'getCandidatoPorUf'])->name('candidato.uf');

Route::get('vaga', [VagaController::class, 'showForm']);
Route::post('cadastro', [VagaController::class, 'cadastro'])->name('vaga.cadastro');
Route::put('atualizar', [VagaController::class, 'atualizar'])->name('vaga.atualizar');
Route::delete('deletar', [VagaController::class, 'deletar'])->name('vaga.delete');
Route::get('vagas', [VagaController::class, 'getVagas'])->name('candidato.list');
//Route::get('vaga/{idEmpresa}', [VagaController::class, 'getVagaPorEmpresa'])->name('vaga.empresa');
Route::get('vaga/{cargo}', [VagaController::class, 'getVagaPorCargo'])->name('vaga.cargo');
//Route::get('vaga/{cidade}', [VagaController::class, 'getVagaPorCidade'])->name('vaga.cidade');
//Route::get('vaga/{uf}', [VagaController::class, 'getVagaPorUf'])->name('vaga.uf');
