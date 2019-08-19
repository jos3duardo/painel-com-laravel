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
    <!-- Charts JS-->
    <script src="{{asset('js/Chart.min.js')}}"></script>

</head>
<body>
<div class="d-flex" id="wrapper">
    <!--SIDEBAR-->
    @component('components.sidebar')
    @endcomponent
    <!--CONTEUDO-->
    <div id="page-content-wrapper">
        <!--NAVBAR-->
        @component('components.navbar')
        @endcomponent

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
<script src="{{asset('js/funcoes.js')}}"></script>


<script>
    $("#menu-toggle").click(function(event){
        event.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
