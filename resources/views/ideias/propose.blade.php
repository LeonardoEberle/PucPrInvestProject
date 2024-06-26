@extends('layouts.main')
@section('title', 'fazer proposta')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">envie sua proposta</h1>
    <h2 class="mb-4">Proposta para: {{$ideia->ideia_nome}}</h2>
    <form method="POST" action="{{route('proposta.create')}}">
        @csrf
        <input type="hidden" name="proposta_usuarioID" value="{{Auth::user()->usuario_id}}">
        <input type="hidden" name="proposta_ideiaID" value="{{$ideia->ideia_id}}">
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" name="valor" required>
        </div>
        <div class="form-group">
            <label for="obj">Objetivo</label>
            <textarea class="form-control" id="obj" name="objetivo" rows="3" maxlength="500" required></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection
