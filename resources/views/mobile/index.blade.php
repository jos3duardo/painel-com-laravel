@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">

    <div class="row ">
        <div class="col-sm-6">
            <a href="{{route('home')}}" class="btn btn-lg btn-dark btn-block  group-mobile"> <i class="fas fa-home"></i> Inicio</a>
        </div>
        <div class="col-sm-6">
            <a href="/" class="btn btn-dark btn-lg btn-block  group-mobile"><i class="fas fa-outdent"></i>  Saidas</a>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-6">
            <a href="{{route('products')}}" class="btn btn-dark btn-block btn-lg  group-mobile"> <i class="fas fa-box-open"></i> Produtos</a>
        </div>
        <div class="col-sm-6">
            <a href="{{route('category')}}" class="btn btn-lg btn-dark btn-block  group-mobile"> <i class="fas fa-sitemap"></i> Categoria</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="#" class="btn btn-dark btn-lg btn-block  group-mobile"> <i class="fas fa-layer-group"></i> Estoque</a>
        </div>
        <div class="col-sm-6">
            <a href="{{route('clients')}}" class="btn btn-dark btn-lg btn-block  group-mobile"> <i class="fas fa-people-carry"></i> Clientes</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="#" class="btn btn-dark btn-lg btn-block  group-mobile"> <i class="fas fa-chart-bar"></i> Relatórios</a>
        </div>
        <div class="col-sm-6">
            <a href="#" class="btn btn-dark btn-block btn-lg  group-mobile"> <i class="fas fa-users"></i> Funcionarios</a>

        </div>
    </div>
</div>

@endsection
