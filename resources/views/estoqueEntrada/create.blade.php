@extends('layouts.dashboard')
@section('content')
    <a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
    <hr>
        <h3 class="son-main-text-3">Criar Entrada</h3>
        <div class="card son-form">
            <form action="{{route('estoque-entrada')}}" method="POST">
                @csrf
                @include('estoqueMovimento._create')
            </form>
        </div>
@endsection
