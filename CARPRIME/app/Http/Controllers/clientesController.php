<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class clientesController extends Controller
{
    public function listar(){
        $clientes = Clientes::all();
        
        return view('clientes', ['clientes'=>$clientes]);
    }
}
