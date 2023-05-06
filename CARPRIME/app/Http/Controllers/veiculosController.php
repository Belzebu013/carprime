<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculos;

class veiculosController extends Controller
{
    public function Listar(){
        $veiculos = veiculos::All();

        return view('veiculos', ['veiculos'=>$veiculos]);
    }
}
