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
			text-align: left;
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
	<h1>Relatório de Vendas</h1>

	<h2>Total de Vendas Mensal</h2>
	<p>Insira aqui o total de vendas mensal.</p>

	<h2>Marcas de Carros Mais Vendidas no Mês</h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Número de Vendas</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Ford</td>
				<td>15</td>
			</tr>
			<tr>
				<td>Chevrolet</td>
				<td>10</td>
			</tr>
			<tr>
				<td>Volkswagen</td>
				<td>8</td>
			</tr>
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
			<tr>
				<td>João</td>
				<td>20</td>
			</tr>
			<tr>
				<td>Maria</td>
				<td>15</td>
			</tr>
			<tr>
				<td>Pedro</td>
				<td>10</td>
            </tr>
        </tbody>
    </table>

</body>

