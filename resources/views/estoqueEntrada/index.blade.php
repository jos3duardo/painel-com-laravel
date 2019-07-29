@extends('layouts.dashboard')
@section('content')
    <a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
    <a href="{{route('estoque-entrada-add')}}" class="btn btn-dark">Nova Entrada</a>
    <hr>

    <h5>Histórico de entrada do estoque</h5>
    @include('estoqueMovimento._index')

@endsection
