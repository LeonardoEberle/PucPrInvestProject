@extends('layouts.main')
@section('title', 'Welcome')

@section('content')

    <h1>Usuarios cadastrados</h1>
    @foreach ($users as $user)
        <p>{{$user->usu_senha}}</p>
    @endforeach

@endsection
