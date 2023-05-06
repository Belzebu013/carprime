<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Index;
use App\Models\Login;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index(){

        $id_cad = Session::get('login');

        if(empty($id_cad)){
            return redirect()->route('login');
        }

        $user = Login::where('id_cad', (int) Session::get('login'))->first()->nome_cad;
        
        $mes = date('m');

        $venda_mes = (float)Index::whereBetween('dt_venda',['2022-'.$mes.'-01','2022-'.$mes.'-30'])
            ->sum('vl_venda');

            $venda_ano = (float)Index::whereBetween('dt_venda',['2022-01-01','2022-12-31'])
            ->sum('vl_venda');

        $marcas_mais_vendidas = DB::table('veiculos')
            ->join('vendas', 'veiculos.id_veiculo', '=', 'vendas.id_veiculo')
            ->select('veiculos.marca', DB::raw('COUNT(vendas.id_venda) AS total_vendas'))
            ->whereMonth('vendas.dt_venda', '=', $mes) // filtrar por mês
            ->groupBy('veiculos.marca')
            ->orderByDesc('total_vendas')
            ->take(5) // limit to top 5 rows
            ->get();

        $lucro_mensal = DB::table('vendas as v')
            ->join('veiculos as ve', 'v.id_veiculo', '=', 've.id_veiculo')
            ->selectRaw('SUM(v.vl_venda - ve.vl_compra) as lucro')
            ->whereMonth('v.dt_venda', '=', $mes)
            ->get();

        $venda_funcionario = DB::table('vendas')
            ->select('Funcionario', DB::raw('COUNT(id_venda) as total_vendas'))
            ->whereRaw('MONTH(dt_venda) = '.$mes)
            ->groupBy('Funcionario')
            ->get();

        $cores = [
            'bg-primary',
            'bg-secondary',
            'bg-success',
            'bg-danger',
            'bg-warning',
            'bg-info'
        ];

        $competencia = DB::table('vendas')
            ->select(DB::raw('MONTH(dt_venda) as mes_venda'))
            ->groupBy('mes_venda')
            ->orderBy('mes_venda', 'asc')
            ->get();
        
        return view('index', [
            'venda_mes'=>$venda_mes,
            'venda_ano'=>$venda_ano,
            'marcas_mais_vendidas'=>$marcas_mais_vendidas,
            'lucro_mensal'=>$lucro_mensal->first()->lucro,
            'total_vendas'=>$venda_funcionario,
            'cores'=>$cores,
            'competencia'=>$competencia,
            'user'=>$user
        ]);
    }

    public function mudarCompetencia(Request $request){
        
        $mes = (int)$request->input('valor');

        $user = Login::where('id_cad', (int) Session::get('login'))->first()->nome_cad;

        $venda_mes = (float)Index::whereBetween('dt_venda',['2022-'.$mes.'-01','2022-'.$mes.'-30'])
            ->sum('vl_venda');

        $venda_ano = (float)Index::whereBetween('dt_venda',['2022-01-01','2022-12-31'])
            ->sum('vl_venda');

        $marcas_mais_vendidas = DB::table('veiculos')
            ->join('vendas', 'veiculos.id_veiculo', '=', 'vendas.id_veiculo')
            ->select('veiculos.marca', DB::raw('COUNT(vendas.id_venda) AS total_vendas'))
            ->whereMonth('vendas.dt_venda', '=', $mes) // filtrar por mês
            ->groupBy('veiculos.marca')
            ->orderByDesc('total_vendas')
            ->take(5) // limit to top 5 rows
            ->get();

        $lucro_mensal = DB::table('vendas as v')
            ->join('veiculos as ve', 'v.id_veiculo', '=', 've.id_veiculo')
            ->selectRaw('SUM(v.vl_venda - ve.vl_compra) as lucro')
            ->whereMonth('v.dt_venda', '=', $mes)
            ->get();

        $venda_funcionario = DB::table('vendas')
            ->select('Funcionario', DB::raw('COUNT(id_venda) as total_vendas'))
            ->whereRaw('MONTH(dt_venda) = '.$mes)
            ->groupBy('Funcionario')
            ->get();

        $cores = [
            'bg-primary',
            'bg-secondary',
            'bg-success',
            'bg-danger',
            'bg-warning',
            'bg-info'
        ];

        $competencia = DB::table('vendas')
            ->select(DB::raw('MONTH(dt_venda) as mes_venda'))
            ->groupBy('mes_venda')
            ->orderBy('mes_venda', 'asc')
            ->get();

        dd($mes);
        return view('index', [
            'venda_mes'=>$venda_mes,
            'venda_ano'=>$venda_ano,
            'marcas_mais_vendidas'=>$marcas_mais_vendidas,
            'lucro_mensal'=>$lucro_mensal->first()->lucro,
            'total_vendas'=>$venda_funcionario,
            'cores'=>$cores,
            'competencia'=>$competencia,
            'user'=>$user,
            'mes'=>$mes
        ]);
    }

    public function BaixarRelatorio(Request $request){
        $mes = $request->mes;

        $venda_mes = (float)Index::whereBetween('dt_venda',['2022-'.$mes.'-01','2022-'.$mes.'-30'])
            ->sum('vl_venda');

        $venda_ano = (float)Index::whereBetween('dt_venda',['2022-01-01','2022-12-31'])
            ->sum('vl_venda');

        $marcas_mais_vendidas = DB::table('veiculos')
            ->join('vendas', 'veiculos.id_veiculo', '=', 'vendas.id_veiculo')
            ->select('veiculos.marca', DB::raw('COUNT(vendas.id_venda) AS total_vendas'))
            ->whereMonth('vendas.dt_venda', '=', $mes) // filtrar por mês
            ->groupBy('veiculos.marca')
            ->orderByDesc('total_vendas')
            ->take(5) // limit to top 5 rows
            ->get();

        $venda_funcionario = DB::table('vendas')
            ->select('Funcionario', DB::raw('COUNT(id_venda) as total_vendas'))
            ->whereRaw('MONTH(dt_venda) = '.$mes)
            ->groupBy('Funcionario')
            ->get();

        $competencia = DB::table('vendas')
            ->select(DB::raw('MONTH(dt_venda) as mes_venda'))
            ->groupBy('mes_venda')
            ->orderBy('mes_venda', 'asc')
            ->get();

        
            return view('relatorio', [
            'venda_mes'=>$venda_mes,
            'venda_ano'=>$venda_ano,
            'marcas_mais_vendidas'=>$marcas_mais_vendidas,
            'total_vendas'=>$venda_funcionario,
            'competencia'=>$competencia,
            'mes'=>$mes
        ]);
    }
}

