@extends('layouts.dashboard')
@section('content')
    <!-- Button trigger modal -->
    <a href="{{route('home')}}"class="btn btn-dark">Inicio</a>
    <hr>
    <h3 class="son-main-text-3">Editar Produto</h3>
    <div class="card son-form">
        <form action="{{route('product-up',['id' => $product->id])}}" method="POST" class="son-form">
        @csrf
            <div class="son-form-body">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="son-form-field form-control" value="{{$product->name}}" placeholder="Nome Produto" autofocus required>
                </div>
                <div class="form-group">
                    <label for="name">Unidade</label>
                    <input type="text" name="unidade" class="son-form-field form-control" value="{{$product->unidade}}" placeholder="Unidade" autofocus required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="son-form-field form-control" required>
                        <option value="{{$product->category_id}}">{{$product->categoria->name}}</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" class="son-form-field">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="name">Estoque</label>--}}
{{--                    <input type="number" step="any" name="estoque" class="son-form-field form-control" placeholder="Estoque" autofocus required>--}}
{{--                </div>--}}
                <div class="form-group">
                    <label for="name">Valor</label>
                    <input type="number" value="{{$product->valor}}" step="any" name="valor" class="son-form-field form-control" placeholder="Valor" autofocus required>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button class="btn btn-dark"> Cadastrar</button>
                </div>
            </div>
    </form>
    </div>
@endsection
