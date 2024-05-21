@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <h2>Usuarios cadastrados:</h2>
@foreach ($users as $user)
    <p>
        nome: {{$user->usu_nome}},
        <br>
        Id:{{$user->usu_id}},
        <br>
        email:{{$user->usu_email}},
        <br>
        senha:{{$user->usu_senha}},
        <br>
        cpf:{{$user->usu_cpf}},
        <br>
        genero:{{$user->usu_genero}}
    </p>
@endforeach

@endsection
