<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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
                    <a href="../login/login.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>

    <section class="home home2">
        <div class="container">
            <h1>Cadastro de Veículos</h1>
            <form>
                <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
                </div>
                <div class="mb-3">
                <label for="combustivel" class="form-label">Combustível</label>
                <select class="form-select" id="combustivel" name="combustivel">
                    <option value="">Selecione</option>
                    <option value="gasolina">Gasolina</option>
                    <option value="alcool">Álcool</option>
                    <option value="diesel">Diesel</option>
                    <option value="flex">Flex</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="portas" class="form-label">Número de Portas</label>
                <input type="number" class="form-control" id="portas" name="portas" min="1">
                </div>
                <div class="mb-3">
                <label for="km" class="form-label">Km Rodados</label>
                <input type="number" class="form-control" id="km" name="km" min="0">
                </div>
                <div class="mb-3">
                <label for="transmissao" class="form-label">Transmissão</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transmissao" id="manual" value="manual">
                    <label class="form-check-label" for="manual">
                    Manual
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transmissao" id="automatico" value="automatico">
                    <label class="form-check-label" for="automatico">
                    Automático
                    </label>
                </div>
                </div>
                <div class="mb-3">
                <label for="valor" class="form-label">Valor do Veículo</label>
                <input type="text" class="form-control" id="valor" name="valor">
                </div>
                <div class="mb-3">
                <label for="url" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" id="url" name="url">
                </div>
                <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>

    </section>
    <script src="{{ asset('js/script.js')}}"></script>
</body>
<style>
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

        .container{
            width: 50%;
            background-color: #fff;
        }
    </style>
</html>