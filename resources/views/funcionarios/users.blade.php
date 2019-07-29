@extends('layouts.dashboard')
@section('content')
    <!-- Button trigger modal -->
    <a href="{{route('home')}}" class="btn btn-dark">Inicio</a>
    <hr>

    <div class="card son-form">
        <div class="card-body">
            <table class="table table-sm table-bordered table-sm-responsive">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="45%">Nome</th>
                    <th width="50%">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
