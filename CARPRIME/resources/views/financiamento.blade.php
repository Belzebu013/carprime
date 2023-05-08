<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background: #DCDCDC;
            width: 80%;
            margin-left: 200px;

        }
        .texto{
            width: 20%;
            height: 100px;
        }
        .tamanho{
            width: 100px;
            height: 30px;
            border: solid 3px;
        }
        


    </style>
    
    <title>CarPrime</title> 
</head>
<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                   <img src="{{asset('arquivos/cp.jpg')}}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">CarPrime</span>
                    <span class="profession">Versão 1.0.0</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('home') }}">
                         <i class='bi bi-house'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{route('clientes')}}">
                            <i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{route('veiculos')}}">
                            <i class='"bi bi-truck'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Veículos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{route('financiamento')}}">
                            <i class="bi bi-cash-coin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text nav-text">Financiamento</span>
                        </a>
                    </li>         

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

   <section class="home">
        <div class="container" id="cont">
            <div class="row">
            <form method="get" action="{{route('financiamento-calcular')}}">
                <label for="">VEICULO</label>
                <center>
                <select class="form-control border-dark" name="vl_compra" style="width: 250px;">
                    @foreach ($veiculos as $veiculo)
                        <option value="{{$veiculo->vl_compra}}">{{$veiculo->nm_veiculo.' - R$'.$veiculo->vl_compra}}</option>
                    @endforeach
                </select>
                </center>
                <br/>
                <label for="">ENTRADA</label>
                <center><input class="form-control border-dark" type="text" name="entrada"></center>
                <br/>
                <label for="">TAXA DE JUROS MÊS</label>
                <center><input class="form-control border-dark" type="text" name="taxa"></center>
                <br/>
                <label for="">QUANTIDADE DE PARCELAS</label>
                <center><input class="form-control border-dark" type="number" name="parcelas"></center>
                <br/>

                <center><button class="btn btn-primary" type="submit" name="calcula" id="sub">Calcular</button></center>
            </form>

            <div style="width: 650px;height: 500px; overflow: auto;">
                <?php if(!empty($parcelas)): ?>
                <center>
                    <table style="width: 500px;margin-top: 80px;">
                        <thead>
                            <tr>
                                <th>Valor Veículo</th>
                                <th>Valor Entrada</th>
                                <th>Numero Parcelas</th>
                                <th>% Juros</th>
                                <th>Valor Parcela</th>
                                <th>Valor final</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>R$ {{ $valor_veiculo }}</td>
                                    <td>R$ {{ $entrada }}</td>
                                    <td>{{ $parcelas }}</td>
                                    <td>{{ $taxa*100 }}%/mês</td>
                                    <td>R$ {{ $valor_parcela }}</td>
                                    <td>R$ {{ $calculo_valor_final }}</td>
                                </tr>
                        </tbody>
                    </table>
                    <h4 style="margin-top: 150px;">Valor Final: R$ {{ number_format($calculo_valor_final, 2, ',', '.') }}</h4>
                </center>
                <?php endif; ?>
            </div>

            </div>
        </div>

    </section>



    <script src="js/script.js"></script>
  

</body>
<script>
        $(document).ready(()=>{
            //$('section').addClass('bg-light');

            $('#cliente').click(()=>{
                $.get('cliente_cad.php', data=>{
                    $('body').html(data);
                });
            })

            $('label').css({ 'width':'480px', 'text-align':'center'});

            $('input').css({ 'width':'250px'});

            $('form').css({ 'width':'500px'});

            $('h4').css({'text-align':'center'});

            $('td').css({'text-align':'center','padding':'6px'});

            $('th').css({'text-align':'center', 'padding':'6px'});

            $('#cont').css({ 
              'margin-top':'calc(20% - 150px)', 'left':'calc(50% - 150px)', 'background-color':'#e0e0e0',
              'border-radius':'10px','height':'450px', 'padding':'10px'
            });

        })

    </script>

    <style>

        .home{
            margin-right: 50%;
        }

        .close{
            opacity: 100%;
            background-color:#000000				;
        }

        .close a{
            color: #FFF;
        }

        .close .search-box{
            display: none;
        }

        .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
            opacity: 100%;
        }
    </style>

</html>