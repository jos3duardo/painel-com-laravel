<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>SISCOMPRA</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="text-center">
    <div class="container">
        <img class="mb-1" src="/img/logo.jpg" alt="" width="72" height="72">
        <div style="font-size: 43px"><b>Sis</b>Compra <small style="font-size: 16px">{{env('APP_VERSION')}}</small></div>
        @yield('content')
        <p class="mt-3 mb-1 text-muted">
            &copy; Todos os Direitos Reservados
            {{date('Y')}}
        </p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompra || Jos3duardo</a>
    </div>

</body>
</html>


