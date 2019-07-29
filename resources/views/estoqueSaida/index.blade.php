@extends('layouts.dashboard')
@section('content')
    <a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
    <a href="{{route('estoque-saida-add')}}" class="btn btn-dark">Nova Saida</a>
    <hr>
    <h5>Histórico de saidas do estoque</h5>
    @include('estoqueMovimento._index')

@endsection
