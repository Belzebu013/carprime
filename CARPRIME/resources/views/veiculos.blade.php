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
                    <img src="imagens/cp.jpg" alt="">
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
                            <i class='bi bi-person-plus ' ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home home2">
        <div class="container">
            <div class="row">
                <!-- Card 1-->
            @foreach ($veiculos as $key=>$veiculo)
                <div class="col">
                    <div class="card" style="width: 15em; border-radius: 10px;margin-top: 5%;">
                        <img src="{{$veiculo->url_veiculo}}" class="card-img-top" alt="Imagem Carro">
                        <div class="card-body">
                          <h5 class="card-title">{{$veiculo->nm_veiculo}}</h5>
                          <p class="card-text">
                            {{$veiculo->ds_veiculo}}
                          </p>
                          <a href="#" class="btn btn-primary">Acessar</a>
                        </div>
                      </div>
                      <br/>
                </div>  
            @endforeach
    </section>
   <script src="{{ asset('js/script.js')}}"></script>

</body>
</html>