<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaga;
use App\Models\Empresa;


class VagaController extends Controller
{
    public function showForm()
    {

        $empresas = Empresa::get();

        return view('pages.vaga', compact('empresas'));
    }

    public function cadastro(Request $request)
    {
        Vaga::create([
            'cargo' => $request->cargo,
            'especificacoes' => $request->especificacoes,
            'remuneracao' => $request->remuneracao,
            'valeTransporte' => $request->valeTransporte,
            'valeRefeicao' => $request->valeRefeicao,
            'observacoes' => $request->observacoes,
            'turno' => $request->turno,
            'formaContratacao' => $request->formaContratacao,
            'uf' => $request->uf,
            'empresa_id' => $request->empresa,
        ]);


        $empresas = Empresa::get();

        return view('pages.vaga', compact('empresas'))->with('success', 'Vaga cadastrada');

    }

    public function deletar(Vaga $id) 
    {
        $id->delete();

        return back()->with('success', 'Vaga deletada');

    }

    public function editar($id) 
    {
        
        $vaga = Vaga::find($id);

        $empresas = Empresa::get();

        return view('pages.vaga', compact('vaga'), compact('empresas'));
        
    }

    public function atualizar(Request $request, $id)
    {

        $vaga = Vaga::find($id);
        
        $vaga->update([
            'cargo' => $request->cargo,
            'especificacoes' => $request->especificacoes,
            'remuneracao' => $request->remuneracao,
            'valeTransporte' => $request->valeTransporte,
            'valeRefeicao' => $request->valeRefeicao,
            'observacoes' => $request->observacoes,
            'turno' => $request->turno,
            'formaContratacao' => $request->formaContratacao,
            'uf' => $request->uf,
            'empresa_id' => $request->empresa,
        ]);

        

        $vagas = Vaga::with('empresa')->get();

        return view('pages.vaga_list', compact('vagas'));

    
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