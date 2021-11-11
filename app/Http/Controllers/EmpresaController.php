<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empresa;

class EmpresaController extends Controller 
{
    public function showForm()
    {
        return view('pages.empresa');
    }

    public function create(Request $request)
    {
        $data = $request->only('login');
        $data = $request->only('senha');
        $data = $request->only('razaoSocial');
        $data = $request->only('cnpj');
        $data = $request->only('areaAtuacao'); 
        
        Empresa::create($data);

        return view('pages.empresa');
        
    }

    public function getEmpresa()
    {
        
        $empresas = Empresa::with('endereco', 'vaga')->get();
    
        dd($empresas);

        return view('pages.empresa', compact('empresas'));

    }


    public function getEmpresaPorUf($uf)
    {

        $empresas = Empresa::with('endereco', 'vaga')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.empresa_id', '=', 'empresas.id');
                        })
                        ->where('enderecos.uf', '=', $uf)
                        ->get();

        dd($empresas);

    
        return view('pages.empresa', compact('empresas'));

    }

    public function getEmpresaPorCidade($cidade)
    {

        $empresas = Empresa::with('endereco', 'vaga')
                        ->join('enderecos', function($join){
                            $join->on('enderecos.empresa_id', '=', 'empresas.id');
                        })
                        ->where('enderecos.cidade', '=', $cidade)
                        ->get();

        dd($empresas);

       return view('pages.empresa', compact('empresas'));

    }

    public function getEmpresaPorNome($nome)
    {

        $empresas = Empresa::with('endereco', 'vaga')->where('razaoSocial', $nome)->get();

        dd($empresas);

        return view('pages.empresa', compact('empresas'));

    }

}
