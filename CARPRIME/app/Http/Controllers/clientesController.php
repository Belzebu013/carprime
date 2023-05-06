<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Clientes;

class clientesController extends Controller
{
    public function listar(){
        $clientes = Clientes::all();
        
        return view('clientes', ['clientes'=>$clientes]);
    }

    public function Cadastro(){
        $dados = $_REQUEST;

        $cliente = new Clientes();
        $cliente->nm_cliente = $dados['nome'];
        $cliente->cpf_cliente = $dados['cpf'];
        $cliente->email_cliente = $dados['email'];
        $cliente->ds_endereco = $dados['endereco'];
        $cliente->dt_nascimento = $dados['dt_nascimento'];
        $cliente->nm_telefone = $dados['telefone'];
        $cliente->save();

        return 'Cadastro realizado com sucesso!';

    }

}
