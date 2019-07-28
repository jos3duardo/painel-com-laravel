@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Bem vindo ao sistema de gestão de estoque!</h2>
                    <h4>Ainda estamos em construção, em breve termos novidades</h4>

                </div>
            </div>
        </div>
    </div>
</div>
<
@endsection
