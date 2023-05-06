<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculos;
use Illuminate\Support\Facades\Session;

class veiculosController extends Controller
{
    public function Listar(){
        $veiculos = veiculos::All();

        return view('veiculos', ['veiculos'=>$veiculos]);
    }
}
