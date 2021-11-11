<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\ExperienciaProfissional;
use App\Models\Endereco;

class CandidatoController extends Controller 
{
    public function showForm()
    {
        return view('candidato');
    }

    public function addCandidato(Request $request)
    {
         $data = $request->only(
             'login',
             'senha',
             'nome',
             'rg',
             'orgaoExpeditor',
             'dataExpedicao',
             'cpf',
             'dataNascimento',
             'sexo',
             'estadoCivil'
            );
         
         Candidato::create($data);

         return view('pages.candidato');
                   
    }

    public function removerCandidato(Candidato $candidato)
    {
        $candidato->delete();

        return view('pages.candidato');
    }

    public function getCandidato()
    {
       
        $candidatos = Candidato::with('endereco', 'experienciaProfissional')->get();

        dd($candidatos);
        
        return view('pages.candidato', compact('candidatos'));
    }

    public function getCandidatoPorCargo($cargo)
    {

        $candidatos = Candidato::with('endereco', 'experienciaProfissional')
                        ->join('experiencia_profissionals', function($join){
                            $join->on('experiencia_profissionals.candidato_id', '=', 'candidatos.id');
                        })
                        ->where('experiencia_profissionals.cargo', '=', $cargo)
                        ->get();

        dd($candidatos);

        return view('pages.candidato', compact('candidatos'));                        
    }

    public function getCandidatoPorCidade($cidade)
    {
        $candidatos = Candidato::with('endereco', 'experienciaProfissional')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.candidato_id', '=', 'candidatos.id');
                        })
                        ->where('enderecos.cidade', '=', $cidade)
                        ->get();

        dd($candidatos);

        return view('pages.candidato', compact('candidatos'));                        
    }

    public function getCandidatoPorUf($uf)
    {
        $candidatos = Candidato::with('endereco', 'experienciaProfissional')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.candidato_id', '=', 'candidatos.id');
                        })
                        ->where('enderecos.uf', '=', $uf)
                        ->get();

        dd($candidatos);


        return view('pages.candidato', compact('candidatos'));  
                              
    }
}
