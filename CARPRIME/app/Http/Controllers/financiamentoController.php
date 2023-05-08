<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Financiamento;


class financiamentoController extends Controller
{
    public function Exibir(){

        $id_cad = Session::get('login');

        if(empty($id_cad)){
            return redirect()->route('login');
        }

        $veiculos = Financiamento::All();
        return view('financiamento', ['veiculos'=>$veiculos]);
    }

    public function Calcular(){
        $dados = $_REQUEST;
        $veiculos = Financiamento::All();
        $vl_veiculo = (float)$dados['vl_compra'];
        $entrada = (float)$dados['entrada'];
        $taxa = (float)$dados['taxa'] / 100;
        $parcelas = (int)$dados['parcelas'];
    
        $valor_parcela = $this->jurosComposto($vl_veiculo, $taxa, $parcelas);
        $calculo_valor_final = $this->vl_final($valor_parcela, $parcelas);
        

        if(!empty($entrada)){
            $calculo_valor_final = (float)$calculo_valor_final - (float)$entrada;
        }

        return view('financiamento', [
            'valor_veiculo'=>$vl_veiculo,
            'taxa'=>$taxa,
            'parcelas'=>$parcelas,
            'veiculos' => $veiculos,
            'valor_parcela' => $valor_parcela,
            'calculo_valor_final' => $calculo_valor_final,
            'entrada'=>$entrada
        ]);
    }

    public function jurosComposto($valor, $taxa, $parcelas) {

        $valParcela = $valor * pow((1 + $taxa), $parcelas);
        $valParcela = number_format($valParcela / $parcelas, 2, ",", ".");

        return $valParcela;
    }

    //Funcao Recursiva para somatorio do valor final do fincanciamento
    function vl_final($valorParcelaComposto, $parcelas){
        if($parcelas==0){
            return 1;
        }else{
            return (float)$valorParcelaComposto + (float)$this->vl_final($valorParcelaComposto, $parcelas-1);
        }
    }
}
