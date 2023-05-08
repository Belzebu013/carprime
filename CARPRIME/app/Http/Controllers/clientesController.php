<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Clientes;

class clientesController extends Controller
{
    public function listar(){

        $id_cad = Session::get('login');

        if(empty($id_cad)){
            return redirect()->route('login');
        }
        
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

    public function Excluir(Request $request){
        $id = (int)$request->input('id_cliente');
        $cliente = Clientes::where('id_cliente', $id)->delete();
        $msg = "REGISTRO EXCLUIDO COM SUCESSO!";
        $clientes = Clientes::all();
        return view('clientes', ['msg'=>$msg, 'clientes'=>$clientes]);
    }

}
