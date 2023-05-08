<!DOCTYPE html>
<html>
<head>
	<title>Relatório de Vendas</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
			font-size: 14px;
			color: #333;
			line-height: 1.5;
			padding: 20px;
		}

		h1, h2, h3 {
			color: #007bff;
			margin-top: 0;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		th, td {
			padding: 8px;
			border: 1px solid #ddd;
			text-align: center;
		}

		th {
			background-color: #007bff;
			color: #fff;
			font-weight: bold;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#logo {
			display: inline-block;
			margin-right: 20px;
			width: 100px;
			height: 100px;
			background-image: url("logo.png");
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
		}

		#print-button {
			position: absolute;
			top: 20px;
			left: 20px;
			background-color: #007bff;
			color: #fff;
			padding: 8px 16px;
			border-radius: 4px;
			cursor: pointer;
		}

		@media print {
			#print-button {
				display: none;
			}
		}
	</style>
</head>
<body>
	<button id="print-button" onclick="window.print()">Imprimir</button>
	<div id="logo"></div>
	<h2>Relatório de Vendas</h2>
	<h2>Total de Vendas Mensal</h2>
    @switch($mes)
        @case(1)
            <?php $nome_mes = 'Janeiro'; ?>
            @break
        @case(2)
            <?php $nome_mes = 'Fevereiro'; ?>
            @break
        @case(3)
            <?php $nome_mes = 'Março'; ?>
            @break
        @case(4)
            <?php $nome_mes = 'Abril'; ?>
            @break
        @case(5)
            <?php $nome_mes = 'Maio'; ?>
            @break
        @case(6)
            <?php $nome_mes = 'Junho'; ?>
            @break
        @case(7)
            <?php $nome_mes = 'Julho'; ?>
            @break
        @case(8)
            <?php $nome_mes = 'Agosto'; ?>
            @break
        @case(9)
            <?php $nome_mes = 'Setembro'; ?>
            @break
        @case(10)
            <?php $nome_mes = 'Outubro'; ?>
            @break
        @case(11)
            <?php $nome_mes = 'Novembro'; ?>
            @break
        @case(12)
            <?php $nome_mes = 'Dezembro'; ?>
            @break
        @default
            <?php $nome_mes = ''; ?>
    @endswitch
    <h4>Mês: {{$nome_mes}}</h4>
	<p>{{'R$ '.number_format($venda_mes, 2, ',', '.')}}</p>

	<h2>Marcas de Carros Mais Vendidas no Mês</h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Número de Vendas</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($marcas_mais_vendidas as $marca)
                <tr>
                    <td>{{$marca->marca}}</td>
                    <td>{{$marca->total_vendas}}</td>
                </tr>
            @endforeach
		</tbody>
	</table>

	<h2>Número de Vendas por Vendedor</h2>
	<table>
		<thead>
			<tr>
				<th>Vendedor</th>
				<th>Número de Vendas</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($total_vendas as $venda)
                <tr>
                    <td>{{$venda->Funcionario}}</td>
                    <td>{{$venda->total_vendas}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

