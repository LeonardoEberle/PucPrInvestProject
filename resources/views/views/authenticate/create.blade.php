@extends('layouts.main')
@section('title', 'Register')

@section('content')
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <p>email
            <input type="email" name="email">
        </p>
        <p>senha
            <input type="password" name="senha">
        </p>
        <p>nome
            <input type="text" name="nome">
        </p>
        <p>telefone
            <input type="text" name="telefone">
        </p>
        <p>cpf
            <input type="text" name="cpf">
        </p>
        <p>Genero
            <br>
            <input type="radio" name="genero" value="1">Masculino
            <br>
            <input type="radio" name="genero" value="2">Feminino
        </p>
        <p>Cargo
            <br>
            <input type="radio" name="cargo" value="1">assec
            <br>
            <input type="radio" name="cargo" value="2">usu
        </p>
        <br>
        <button type="submit">Registrar</button>
    </form>
@endsection
