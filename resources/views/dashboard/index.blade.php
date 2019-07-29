@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
<h1>Gestor de Estoque</h1>

<a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
<a href="{{route('estoque-entrada')}}" class="btn btn-dark">Entrada Estoque</a>
<a href="{{route('estoque-saida')}}" class="btn btn-dark">Saida Estoque</a>
    <hr>
    <div class="card son-form">
        <div class="card-body">
            <table class="table table-sm table-bordered table-responsive">
                <thead>
                <tr>
                    <th width="3%">#</th>
                    <th width="50%">Nome</th>
                    <th width="5%">Unidade</th>
                    <th width="5%">Estoque</th>
                    <th width="15%">Categoria</th>
                    <th width="10%">Valor</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->unidade}}</td>
                            <td>{{$product->estoque}}</td>
                            <td>{{$product->categoria->name}}</td>
                            <td>R$ {{number_format($product->valor, 2, ',','.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
@endsection
