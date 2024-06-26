@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div class="container bg-dark mt-5" id="ideias">
    <h2>Ideias Disponiveis</h2>
    <table id="ideasTable" class="table table-striped table-bordered">
        <thead class="thead-primary">
            <tr>
                <th>Título</th>
                <th>Informações</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ideias as $ideia)
            <tr>
                <td>{{$ideia->ideia_nome}}</td>
                <td>{{$ideia->ideia_descricao}}</td>
                <td>
                    <a href="/ideia-{{$ideia->ideia_id}}">Saiba Mais</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
