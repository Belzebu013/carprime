<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Login;

class loginController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function Logar(Request $request){
        //validação;
        $regras = [
            'user' => 'required|email',
            'senha' => 'required'
        ];
 
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'email' => 'Formato incorreto'
        ];

        $request->validate($regras, $feedback);

        $acesso = Login::where('user_cad', $request->user)
            ->where('senha_cad', $request->senha)
            ->first();

        
        if(!empty($acesso)){
            Session::put('login', $acesso->id_cad);
            return redirect()->route('home');
        }else{
            $msg = 'Usúario ou senha incorretos!';
            return view('login', ['msg'=>$msg]);
        }
    }

    public function Logout(){
        Session::forget('login');
        return redirect()->route('login');
    }
}
