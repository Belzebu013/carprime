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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

        .botao_acao, .botao_acoes{
            width: 120px;
        }

        .modal-cad{
            width: 30%; 
            height: 550px; 
            border: 3px solid black; 
            background-color: #DCDCDC; 
            border-radius: 10px; 
            padding: 0px 30px 0px 30px;
            border: none;
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
    
    <div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="myModalLabel">CADASTRO</h4>
            </div>
            <div class="modal-body" style="background-color: #DCDCDC;">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@host.com" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nasc">
                </div>
                <div class="mb-3">
                <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" placeholder="999999999" name="telefone">
                </div>
                    <input type="submit" class="form-control text-light" id="cadastrar" name="cadastrar" value="Cadastrar">
            </div>
            </div>
        </div>
    </div>

    <div id="saida" style="text-decoration: none; border: none">
       
         <table class="table tbl">
          <thead  class="table-dark text-light" id="tb">
            <tr style="text-decoration: none;">
              <th scope="col"><h4>Nome</h4></th>
              <th scope="col"><h4>CPF</th>
              <th scope="col"><h4>Email</th>
              <th scope="col"><h4>Endereço</th>
              <th scope="col"><h4>Data de Nascimento</th>
              <th scope="col"><h4>Telefone</th>
               <th scope="col"></th>
               <th scope="col"></th>
            </tr>
          </thead>
        
        <div style="text-align: center;">
          <h4 id="titulo" style="font-size: 20px;"><i class="bi bi-person-lines-fill"></i> LISTAGEM DE CLIENTES ATIVOS<h4>
          <div style="" id="botoes_alteracao">
                <button type="button" class="btn btn-primary botao_acao"><i class="bi bi-caret-down-fill" id="icone_botao"></i></button>
                <button type="button" class="btn btn-success botao_acoes" id="botao_cadastrar" data-toggle="modal" data-target="#modal_cadastro">Cadastrar</button>
                <button type="button" class="btn" style="width: 50px;" id="refresh"><i class="bi bi-arrow-clockwise"></i></button>
            </div>
        </div>
            
            <tbody>
            @foreach($clientes as $cliente)
                <tr class='tbl2' class='cor' style='top: 50px'>
                <td>{{$cliente['nm_cliente']}}</td>
                <td>{{$cliente['cpf_cliente']}}</td>
                <td>{{$cliente['email_cliente']}}</td>
                <td>{{$cliente['ds_endereco']}}</td>
                <?php $dt_nasc = date("d/m/Y", strtotime($cliente->dt_nascimento));?>
                <td>{{$dt_nasc}}</td>
                <td>{{'(41) '.$cliente['nm_telefone']}}</td>
                <tr>
        
            @endforeach
            </tbody>
           
   
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
        
        $('input.form-control').css({'border-raius':'5px'});

        $('#cadastrar').addClass('bg-primary');

        $('#cadastrar').css({'margin-top':'20px', 'width':'45%'});

        $('.botao_acoes').hide();

        let contador = 0;
        $('.botao_acao').click(()=>{
            contador++;
            $('.botao_acoes').toggle();
            const $iElement = $('#icone_botao');
            if((contador % 2) != 0){
                $iElement.removeClass('bi-caret-down-fill');
                $iElement.addClass('bi-caret-right');
            }else{
                $iElement.removeClass('bi-caret-right');
                $iElement.addClass('bi-caret-down-fill');
            }
        })
    });

    $('#refresh').click(()=>{
        window.location.reload();
    })

    $('#botao_cadastrar').click(() => {
        $('#modal_cadastro').toggle('display');
    });

    $('#cadastrar').on('click', ()=>{
        var nome = $('#nome').val();
        var cpf = $('#cpf').val();
        var email = $('#email').val();
        var endereco = $('#endereco').val();
        var dt_nascimento = $('#dt_nascimento').val();
        var telefone = $('#telefone').val();
        
        $.ajax({
            url: '/cadastro-cliente',
            method: 'get',
            data: {
                nome: nome, 
                cpf: cpf, 
                email: email, 
                endereco: endereco,
                dt_nascimento: dt_nascimento,
                telefone: telefone
            },
            success: function(data){
                $('#modal_cadastro').click()
                $('#titulo').css('font-size', '30px');
                $('#titulo').html(data)
                setTimeout(function(){
                    window.location.reload();
                },4000)
            }
            
        })
    })
</script>
</html>