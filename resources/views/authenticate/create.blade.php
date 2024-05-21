@extends('layouts.main')
@section('title', 'Register')

@section('content')
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <p>email</p>
        <input type="email" name="email">
        <p>senha</p>
        <input type="password" name="password">
        <button type="submit">Registrar</button>
    </form>
@endsection
