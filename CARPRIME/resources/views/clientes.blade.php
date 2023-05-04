<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style_clientes.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>CarPrime</title> 
    <style>
        table{
            border: none;
            color: black;
            background: none;
        }

        tr:hover{
            color: #fff;
            background: #1E90FF;
        }

        td{
            border: none;
            padding: 5px;
        }

        .tbl{
            border: solid 1px black;
        }

        input{
            float: left;
            margin: auto;
            margin-left: 5px;
        
        }

        input:hover{
            transform: scale(1,1.1);
        }

        .bt1{ 
            width: 200px;
            color: black;
            border: solid 1px;
        }


        .inp{
            width: 300px;
            height: 150px;
        }


        
    </style>
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
                    <a href="login.php">
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
    
    <section class="home">
    <div id="conteudo">
    <form id="wrap" style="text-decoration: none; border: none" action="clientes.php" method="post">

        <input type="text" placeholder="Nome:" style="height: 32px" name="nome" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="CPF" style="height: 32px" name="cpf" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="email" style="height: 32px" name="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1"><br><br>
        <input type="text" placeholder="Endereço" style="height: 32px" name="endereco" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="date" placeholder="Data de Nascimento" style="height: 32px" name="dt_nasc" class="form-control" aria-label="Username" aria-describedby="basic-addon1">&nbsp;&nbsp;
        <input type="text" placeholder="Telefone" style="height: 32px" name="telefone" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        <br/><br/>
        <button type="submit" class="btn btn-outline-primary bt1" name="valida">Enviar</button>
</form>

    <div id="saida" style="text-decoration: none; border: none">
       
         <table class="table tbl">
          <thead  class="table-dark text-light" id="tb">
            <tr style="text-decoration: none;">
              <th scope="col" ><h4>Nome</h4></th>
              <th scope="col" ><h4>CPF</th>
              <th scope="col" ><h4>Email</th>
              <th scope="col" ><h4>Endereço</th>
              <th scope="col" ><h4>Data de Nascimento</th>
              <th scope="col" ><h4>Telefone</th>
               <th scope="col" ></th>
               <th scope="col" ></th>
            </tr>
          </thead>


            <hr/>
            <tbody>
            @foreach($clientes as $cliente)
                <tr class='tbl2' class='cor' style='top: 50px'>";
                <td>{{$cliente['nm_cliente']}}</td>;
                <td>{{$cliente['cpf_cliente']}}</td>;
                <td>{{$cliente['email_cliente']}}</td>;
                <td>{{$cliente['ds_endereco']}}</td>;
            
                <td>$DataNasc->format('d/m/Y')</td>;
                <td>{{$cliente['nm_telefone']}}</td>;
                <tr>
        
            @endforeach
            </tbody>
           

    <form action="clientes.php" method="POST">  
        <Input type="hidden" class="inp" name="id" value=""/>
        <Input type="text" class="inp" name="nome" value=""/>
        <Input type="text"  class="inp" name="cpf" value=">"/>
        <Input type="text"  class="inp" name="email" value=""/>
        <Input type="text"  class="inp" name="endereco" value=""/>
        <Input type="text"  class="inp" name="dt_nasc" value=""/>
        <Input type="text"  class="inp" name="telefone" value=""/>
        <Input type="submit" name="altera" value="Alterar" class="bt1" id="btn1"/>
    </form>
   
    </br>
    </br>

        </table>
    </div>
    <script src="{{ asset('js/script_clientes.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>


</body>
<script>
    $(document).ready(()=>{
        $('.inp').css({'width':'150px','height':'30px','padding':'5px','margin-left':'20px','border-radius':'5px','border':'transparent'});

        $('#btn1').css({'width':'100px','height':'30px','margin-left':'20px','border-radius':'5px','text-align':'center'});

        $('#tb').css({'width':'90%','height':'10px'});

        $('#btn1').mouseover(()=>{
            $('#btn1').css({'color':'blue'});
        })

        $('#btn1').mouseout(()=>{
            $('#btn1').css({'color':'black'});
        })
        


    });
</script>
</html>