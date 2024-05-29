@extends('layouts.main')
@section('title', 'login')

@section('content')
@if (session('error'))
    <div>{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('login.store') }}" method="POST">
    @csrf
    Email: <input type="email" name="email" required>
    <br>
    Senha: <input type="password" name="password" required>
    <br>
    <button type="submit">Entrar</button>
</form>
@endsection
