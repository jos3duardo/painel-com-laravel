<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISCOMPRAS</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <!--SIDEBAR-->
    <div id="sidebar-wrapper">
        <div class="sidebar-heading">
            <img src="/img/logo.png" alt=""><span>SISCOMPRAS</span>
        </div>
        <div class="list-group list-group-flush">
            <a href="/" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Funcionários</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i>Produtos</a>
            <a href="/category" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Categorias</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-people-carry"></i>Fornecedores</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-chart-bar"></i>Relatórios</a>
        </div>
    </div>


    <!--CONTEUDO-->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
                <span id="menu-toggle" class="mr-auto">
                    <img src="/img/logo.png" alt="" class="mx-auto d-block">
                </span>
            <a href="{{route('mobile')}}" class="navbar-brand" id="navbar-site-title">Painel</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda a navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="son-navbar-collapse">
                <form action="" class="form-inline son-form-field" id="navbar-search-form">
                    <input type="text" class="form-control son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                </form>

{{--                <div class="dropdown profile ml-auto" id="navbar-profile">--}}
{{--                    <a   class="ml-auto dropdown-toggle" id="navbar-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <img src="/img/avatar.png" alt="">--}}
{{--                        <spam> {{ Auth::user()->name }}</spam>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-profile">--}}
{{--                        <a class="dropdown-item" href="#">Action</a>--}}
{{--                        <a class="dropdown-item" href="#">Another action</a>--}}
{{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container" id="content" >
            {{--    alertas--}}
            @component('components.alerts')
            @endcomponent
            @yield('content')
        </main>
    </div>
</div>



<!--SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- JS DO BOOTSTRAP-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $("#menu-toggle").click(function(event){
        event.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
