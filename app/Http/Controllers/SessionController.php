<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function getSession(Request $request)
    {
        if($request->session()->has('candidato'))
            echo $request->session()->get('candidato');
        else
            echo 'Sem dados na session';
    }

    public function setSession(Request $request)
    {
        

        $candidato = [
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
            
        ];

        $endereco = [
            'tipo' => $request->tipo,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'uf' => $request->uf,
            'email' => $request->email,
            'telefoneResidencial' => $request->telefoneResidencial,
            'telefoneComercial' => $request->telefoneComercial,
            
        ];

        $experiencias = [
            'empresa' => $request->empresa,
            'cargo' => $request->cargo,
            'formaContratacao' => $request->formaContratacao,
            'dataInicio' => $request->dataInicio,
            'dataConclusao' => $request->dataConclusao,

        ];

        session()->put('candidato', $candidato);
        session()->put('endereco', $endereco);
        session()->push('experiencias', $experiencias);

        //$experiencias = session()->get('experiencias');
        $candidato = session()->get('candidato');

        //dd($candidato);

        return redirect()->back();


    }

    public function removeSession(Request $request)
    {

        $request->session()->forget('experiencias');
        $request->session()->forget('canidado');
        $request->session()->forget('candidado');
        $request->session()->forget('endereco');

        echo "Dados da session removidos.";

    }

    public function sessionAll(){

        $data = session()->all();

        dd($data);

    }


}
