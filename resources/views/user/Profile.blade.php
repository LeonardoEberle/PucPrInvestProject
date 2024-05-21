@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <h2>Usuarios cadastrados:</h2>
@foreach ($users as $user)
    <p>Email: {{$user->email}} senha: {{$user->password}}</p>
@endforeach

@endsection
