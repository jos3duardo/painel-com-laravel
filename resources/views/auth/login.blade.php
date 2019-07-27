@extends('layouts.login')
@section('content')
    <form method="POST" class="form-signin" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" class="form-control son-form-field  {{ $errors->has('email') ? ' Invalido' : '' }} " placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" class="son-form-field form-control {{ $errors->has('password') ? ' Invalido' : '' }}" placeholder="Senha" name="password" required>
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
        <a href="{{route('register')}}" class="btn btn-lg btn-warning btn-block" >Cadastrar-se</a>
    </form>
@endsection
