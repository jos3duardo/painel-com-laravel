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
</head>
<body class="text-center">
<div class="container">
    <form method="POST" class="form-signin" action="{{ route('login') }}">
        @csrf
        {{--                <img class="mb-4" src="{{asset('../storage/imagens/logo.png')}}" alt="" width="72" height="72">--}}
        <h1 class="mb-3 font-weight-normal"><b>Sis</b>Compras</h1>
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? ' Invalido' : '' }} " placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" class="form-control {{ $errors->has('password') ? ' Invalido' : '' }}" placeholder="Senha" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>
        <div class="checkbox mb-3">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            {{ __('Permanecer Conectado') }}
        </div>
        <button type="submit" class="btn btn-lg btn-dark btn-block" >Entrar</button>
        <a href="{{route('register')}}" type="submit" class="btn btn-lg btn-warning btn-block" >Cadastrar-se</a>

        <p class="mt-5 mb-3 text-muted">&copy; Todos os Direitos Reservados <br>
        {{date('Y')}}</p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompras || Jos3duardo</a>
    </form>
</div>
</body>
</html>

