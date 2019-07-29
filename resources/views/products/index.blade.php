@extends('layouts.dashboard')
@section('content')
    <!-- Button trigger modal -->
    <a href="{{route('home')}}"class="btn btn-dark">Inicio</a>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#novoProdutoModal">
        Cadastrar Produto
    </button>
    <hr>
    <div class="card son-form">
        <div class="card-body">
            <table class="table table-sm table-bordered table-responsive">
                <thead>
                <tr>
                    <th width="3%">Id</th>
                    <th width="50%">Nome</th>
                    <th width="5%">Unidade</th>
                    <th width="5%">Estoque</th>
                    <th width="15%">Categoria</th>
                    <th width="10%">Valor</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @if(!isset($products))
                    <tr>
                        <td colspan="8" class="text-center">
                            <br>
                            <h3> Nenhum produto cadastrado.</h3>
                        </td>
                    </tr>
                @else
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->unidade}}</td>
                        <td>{{$product->estoque}}</td>
                        <td>{{$product->categoria->name}}</td>
                        <td>R$ {{number_format($product->valor, 2, ',','.') }}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-dark"> <i class="fas fa-pen"></i></a>
                            <a href="{{route('product-destroy', ['id' => $product->id])}}" onclick="confirm('Deseja excluir #{{$product->name}} ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="novoProdutoModal" tabindex="-1" role="dialog" aria-labelledby="novoProdutoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="main-page-form-title" class="son-main-text-3">Novo Produto</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product')}}" method="POST" class="son-form">
                    @csrf
                    <div class="modal-body">
                        <div class="son-form-body">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="son-form-field form-control" placeholder="Nome Produto" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="name">Unidade</label>
                                <input type="text" name="unidade" class="son-form-field form-control" placeholder="Unidade" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="son-form-field form-control" required>
                                    <option value=""></option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" class="son-form-field">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Estoque</label>
                                <input type="number" step="any" name="estoque" class="son-form-field form-control" placeholder="Estoque" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="name">Valor</label>
                                <input type="number" step="any" name="valor" class="son-form-field form-control" placeholder="Valor" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark"> Cadastrar</button>
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
