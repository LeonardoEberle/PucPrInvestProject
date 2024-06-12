@extends('layouts.main')
@section('title', 'Home')

@section('content')
<h1>Sugestoes do dia</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($ideias as $ideia)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>{{$ideia->ideia_nome}}</h3>
                    <h6>Descricao:</h6>
                    <p class="card-text">{{$ideia->ideia_descricao}}</p>
                    <a href="#" class="btn btn-secondary">CONHECER IDEIA</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
