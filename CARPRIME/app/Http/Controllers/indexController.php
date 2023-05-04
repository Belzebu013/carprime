<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class indexController extends Controller
{
    public function index(){
        $venda_mes = (float)Index::whereBetween('dt_venda',['2022-11-01','2022-11-30'])->sum('vl_venda');
        $venda_ano = (float)Index::whereBetween('dt_venda',['2022-01-01','2022-12-31'])->sum('vl_venda');

        return view('index', [
            'venda_mes'=>$venda_mes,
            'venda_ano'=>$venda_ano
        ]);
    }
}
