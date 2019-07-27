@extends('layouts.dashboard')
@section('content')
    <h3 id="main-page-form-title" class="son-main-text-3">Nova Categoria</h3>
    <div class="son-form">
        <form action="{{route('category')}}" method="POST" class="card son-form">
            @csrf
            <div class="card-body son-form-body">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="son-form-field form-control" placeholder="Nome Categoria" autofocus required>
                </div>
            </div>
            <div class="card-footer">
                <div class="confirm-btns">
                    <button class="btn btn-dark"> Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
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
                            <a href="" class="btn btn-sm btn-dark"> <i class="fas fa-pen-square"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection
