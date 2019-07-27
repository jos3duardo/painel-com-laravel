<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>SISCOMPRAS</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="text-center">
    <div class="container">
        <img class="mb-1" src="/img/logo.png" alt="" width="72" height="72">
        <h1 class="mb-1 font-weight-normal"><b>Sis</b>Compras</h1>

        @yield('content')

        <p class="mt-3 mb-1 text-muted">
            &copy; Todos os Direitos Reservados
            {{date('Y')}}
        </p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompras || Jos3duardo</a>
    </div>

</body>
</html>


