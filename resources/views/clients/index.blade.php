@extends('layouts.dashboard')
@section('content')
<!-- Button trigger modal -->
<a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
<a href="{{route('client-add')}}" class="btn btn-dark">Cadastrar Fornecedor</a>
<hr>

<div class="card son-form">
    <div class="card-body">
        <table class="table table-sm table-bordered table-responsive">
            <thead>
            <tr>
                <th width="3%">Id</th>
                <th width="15%">Nome</th>
                <th width="45%">Endereço</th>
                <th width="13%">Celular</th>
                <th width="15%">Email</th>
                <th width="13%" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @if(count($clients)<=0)
                <tr>
                    <td colspan="8" class="text-center">
                        <br>
                        <h3> Nenhum produto cadastrado.</h3>
                    </td>
                </tr>
            @else
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->rua}}, {{$client->numero}}, {{$client->bairro}}</td>
                        <td>{{$client->celular}}</td>
                        <td>{{$client->email}}</td>
                        <td class="text-center">
                            <a href="{{route('client-edit', ['id' => $client->id])}}" class="btn btn-sm btn-dark"> <i class="fas fa-pen"></i></a>
                            <a href="{{route('client-destroy', ['id' => $client->id])}}" onclick="confirm('Deseja excluir #{{$client->name}} ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
