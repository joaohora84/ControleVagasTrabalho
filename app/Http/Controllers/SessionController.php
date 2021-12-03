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
        $experiencias = [
            'empresa' => $request->empresa,
            'cargo' => $request->cargo,
            'formaContratacao' => $request->formaContratacao,
            'dataInicio' => $request->dataInicio,
            'dataConclusao' => $request->dataConclusao,

        ];

        session()->push('experiencias', $experiencias);

        $experiencias = session()->get('experiencias');

        return redirect()->back();


    }

    public function removeSession(Request $request)
    {

        $request->session()->forget('experiencias');

        echo "Dados da session removidos.";

    }

    public function sessionAll(){

        $data = session()->all();

        dd($data);

    }


}
