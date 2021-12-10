<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function removeSession(Request $request)
    {

        $request->session()->flush();

        echo "Dados da session removidos.";

    }

    public function sessionAll(){

        $data = session()->all();

        dd($data);

    }


}
