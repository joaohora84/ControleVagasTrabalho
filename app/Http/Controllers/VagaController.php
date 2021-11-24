<?php

namespace App\Http\Controllers;

use App\Models\Vaga;

class VagaController extends Controller
{
    public function showForm()
    {
        return view('pages.vaga');
    }

    public function getVagas()
    {
        $vagas = Vaga::with('empresa')->get();

        return view('pages.vaga_list', compact('vagas'));
    }

    public function getVagaPorCargo($cargo)
    {

        $vagas = Vaga::with('empresa')->where('cargo', $cargo)->get();

        dd($vagas);

        return view('pages.vaga', compact('vagas'));

    }

    public function getVagaPorCidade($cidade)
    {

        $vagas = Vaga::with('empresa')->where('cidade', $cidade)->get();

        dd($vagas);

        return view('pages.vaga', compact('vagas'));
    }

    public function getVagaPorUf($uf){

        $vagas = Vaga::with('empresa')->where('uf', $uf)->get();

        dd($vagas);

        return view('pages.vaga', compact('vagas'));

    }

    public function getVagaPorEmpresa($idEmpresa) {

        $vagas = Vaga::with('empresa')
                    ->join('empresas', function($join){
                        $join->on('vagas.empresa_id', '=', 'empresas.id');
                    })
                    ->where('empresas.id', '=', $idEmpresa)
                    ->get();

        dd($vagas);

        return view('pages.vaga', compact('vagas'));

    }

} 