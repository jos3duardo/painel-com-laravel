@extends('layouts.dashboard')
@section('content')
    <a href="{{route('home')}}"class="btn btn-dark">Inicio</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#novaCategoriaModal">
        Cadastrar Categoria
    </button>
    <hr>
    @if(count( $categories) >  0)
    <h3 class="son-main-text-3">Categorias Cadastradas</h3>
    <div class="card son-form">
        <div class="card-body">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th width="5%" >Id</th>
                        <th width="60%">Nome</th>
                        <th width="25%" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td  class="text-center">
                            <a href="" class="btn btn-sm btn-dark"> <i class="fas fa-pen"></i></a>
                            <a href="{{route('category-destroy', ['id' => $category->id])}}" onclick="confirm('Deseja excluir #{{$category->name}} ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif


    <!-- Modal -->
    <div class="modal fade" id="novaCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="novaCategoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="main-page-form-title" class="son-main-text-3">Nova Categoria</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category')}}" method="POST" class="son-form">
                    @csrf
                    <div class="modal-body">
                        <div class="son-form-body">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="son-form-field form-control" placeholder="Nome Categoria" autofocus required>
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
