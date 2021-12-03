<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidato;
use App\Models\ExperienciaProfissional;
use App\Models\Endereco;

class CandidatoController extends Controller 
{
    public function showForm()
    {
        return view('pages.candidato');
    }

    public function cadastro(Request $request)
    {
        $candidato = Candidato::create([
            'login' => $request->login,
            'senha' => $request->senha,
            'nome' => $request->nome,
            'rg' => $request->rg,
            'orgaoExpeditor' => $request->orgaoExpeditor,
            'dataExpedicao' => $request->dataExpedicao,
            'ufExpedicao' => $request->ufExpedicao,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento,
            'sexo' => $request->sexo,
            'estadoCivil' => $request->estadoCivil,
            
        ]);

        
        Endereco::create([
            'tipo' => $request->tipo,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'email' => $request->email,
            'telefoneResidencial' => $request->telefoneResidencial,
            'telefoneComercial' => $request->telefoneComercial,
            'candidato_id' => $candidato->id,
            
        ]);

        $experiencias = session()->get('experiencas');

        

    
        return view('pages.candidato');
                   
    }

    public function editar($id) 
    {
        
        $candidato = Candidato::with('endereco')->find($id);

        return view('pages.candidato', compact('candidato'));
        
    }

    public function atualizar(Request $request, $id)
    {

        $candidato = Candidato::find($id);
        $endereco = Endereco::where('candidato_id', $id);

        $candidato->update([
            'login' => $request->login,
            'senha' => $request->senha,
            'nome' => $request->nome,
            'rg' => $request->rg,
            'orgaoExpeditor' => $request->orgaoExpeditor,
            'dataExpedicao' => $request->dataExpedicao,
            'ufExpedicao' => $request->ufExpedicao,
            'cpf' => $request->cpf,
            'dataNascimento' => $request->dataNascimento,
            'sexo' => $request->sexo,
            'estadoCivil' => $request->estadoCivil,
        ]);

        $endereco->update([
            'tipo' => $request->tipo,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'email' => $request->email,
            'telefoneResidencial' => $request->telefoneResidencial,
            'telefoneComercial' => $request->telefoneComercial,
        ]);

        $candidatos = Candidato::get();

        return view('pages.candidato_list', compact('candidatos'));

    
    }

    public function deletar(Candidato $id)
    {
        $id->delete();

        return back()->with('success', 'Candidato deletada');
    }

    public function getCandidato()
    {
       
        $candidatos = Candidato::with('endereco', 'experienciaProfissional')->get();

        return view('pages.candidato_list', compact('candidatos'));
        
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
