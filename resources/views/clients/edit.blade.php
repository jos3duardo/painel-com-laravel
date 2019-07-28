@extends('layouts.dashboard')
@section('content')
    <!-- Button trigger modal -->
    <a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
    <a href="{{route('clients')}}" class="btn btn-dark">Voltar</a>
    <hr>
    <h3 id="main-page-form-title" class="son-main-text-3">Editar Cliente</h3>
    <div class="card son-form">
        <form action="{{route('client-up', ['id' => $client->id])}}" method="POST">
            <div class="body">
                @csrf
                <div class="son-form-body form-group">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <label for="firstName">Nome</label>
                            <input type="text" value="{{$client->name}}" name="name" class="son-form-field form-control" placeholder="Nome Completo" required>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="cpf">CPF</label>
                            <input  type="text" value="{{$client->cpf}}" name="cpf" id="cpf" class="son-form-field form-control" placeholder="CPF" required>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="email">Email</label>
                            <input type="email" value="{{$client->email}}" name="email" class="form-control son-form-field" id="email" placeholder="email@email.com.br">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <label for="Cep">Cep</label>
                            <input type="text" value="{{$client->cep}}" name="cep" id="cep" onblur="pesquisacep(this.value);" size="10" maxlength="8" class="son-form-field form-control" placeholder="Cep" required>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <label for="rua">Rua</label>
                            <input type="text" value="{{$client->rua}}" name="rua" id="rua" class="son-form-field form-control" placeholder="Nome da Rua" required>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <label for="numero">Número</label>
                            <input type="text" value="{{$client->numero}}" name="numero" id="numero" class="son-form-field form-control" placeholder="Numero" required>
                        </div>
                        <div class="col-md-3 col-sm-8">
                            <label for="bairro">Bairro</label>
                            <input type="text" value="{{$client->bairro}}" name="bairro" id="bairro" class="son-form-field form-control" placeholder="Bairro" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <label for="cidade">Cidade</label>
                            <input type="text" value="{{$client->cidade}}" name="cidade" id="cidade" class="son-form-field form-control" placeholder="Cidade" required>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <label for="uf">UF</label>
                            <input type="text" value="{{$client->uf}}" name="uf" id="uf" class="son-form-field form-control" placeholder="UF" required>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <label for="complemento">Complemento</label>
                            <input type="text" value="{{$client->complemento}}" name="complemento" id="complemento" class="son-form-field form-control" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="telefone">Telêfone</label>
                            <input type="text" value="{{$client->telefone}}" name="telefone" id="telefone" class="son-form-field form-control" placeholder="(99) 9999-9999" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="celular">Celular</label>
                            <input type="text" value="{{$client->celular}}" name="celular" id="celular" class="son-form-field form-control" placeholder="(99) 9 9999-9999" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group ">
                        <button class="btn btn-dark"> Editar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
