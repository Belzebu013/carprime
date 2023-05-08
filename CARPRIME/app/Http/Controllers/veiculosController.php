<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculos;
use Illuminate\Support\Facades\Session;

class veiculosController extends Controller
{
    public function Listar(){
        $id_cad = Session::get('login');

        if(empty($id_cad)){
            return redirect()->route('login');
        }
        
        $veiculos = veiculos::All();

        return view('veiculos', ['veiculos'=>$veiculos]);
    }
}
