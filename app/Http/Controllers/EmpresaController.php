<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Endereco;

class EmpresaController extends Controller 
{
    public function showForm()
    {
        return view('pages.empresa');
    }

    public function cadastro(Request $request)
    {

        $empresa = Empresa::create([
            'login' => $request->login,
            'senha' => $request->senha,
            'razaoSocial' => $request->razaoSocial,
            'cnpj' => $request->cnpj,
            'areaAtuacao' => $request->areaAtuacao,
        ]);

        
        Endereco::create([
            'tipo' => $request->tipo,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'email' => $request->email,
            'telefoneComercial' => $request->telefoneComercial,
            'fax' => $request->fax,
            'empresa_id' => $empresa->id,
            
        ]);

        return view('pages.empresa');
        
    }



    public function editar($id) 
    {
        
        $empresa = Empresa::with('endereco')->find($id);

        return view('pages.empresa', compact('empresa'));
        
    }

    public function atualizar(Request $request, $id)
    {

        $empresa = Empresa::find($id);
        $endereco = Endereco::where('empresa_id', $id);

        $empresa->update([
            'login' => $request->login,
            'senha' => $request->senha,
            'razaoSocial' => $request->razaoSocial,
            'cnpj' => $request->cnpj,
            'areaAtuacao' => $request->areaAtuacao,
        ]);

        $endereco->update([
            'tipo' => $request->tipo,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'email' => $request->email,
            'telefoneComercial' => $request->telefoneComercial,
            'fax' => $request->fax,
        ]);

        $empresas = Empresa::with('endereco', 'vaga')->get();

        return view('pages.empresa_list', compact('empresas'));

    
    }

   
    public function deletar(Empresa $id) 
    {
        $id->delete();

        return back()->with('success', 'Empresa deletada');

    }

    public function getEmpresa()
    {
        
        $empresas = Empresa::with('endereco', 'vaga')->get();

        return view('pages.empresa_list', compact('empresas'));

    }

    public function getEmpresaPorParametro(Request $request)
    {

        if($request->inlineRadioOptions == 'razao'){

            $empresas = Empresa::with('endereco', 'vaga')
            ->where('razaoSocial', $request->texto)->get();

        }
        elseif($request->inlineRadioOptions == 'cidade'){

            $empresas = Empresa::with('endereco', 'vaga')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.empresa_id', '=', 'empresas.id');
                        })
                        ->where('enderecos.cidade', '=', $request->texto)
                        ->get();

        }
        elseif($request->inlineRadioOptions == 'uf'){

            $empresas = Empresa::with('endereco', 'vaga')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.empresa_id', '=', 'empresas.id');
                        })
                        ->where('enderecos.uf', '=', $request->texto)
                        ->get();

        } else {

            $empresas = Empresa::with('endereco', 'vaga')->get();

        }

        return view('pages.empresa_list', compact('empresas'));

    }

}
