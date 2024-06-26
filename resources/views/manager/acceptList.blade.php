@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="container" id="aceite">
    <h1>Lista de Ideias</h1>

    @if($ideias->isEmpty())
        <p>Não há ideias disponíveis.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Informações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ideias as $ideia)
                    <tr>
                        <td>{{ $ideia->ideia_nome }}</td> <!-- Altere 'ideia_nome' para o campo que você deseja exibir -->
                        <td>{{ $ideia->ideia_descricao }}</td> <!-- Altere 'ideia_descricao' para o campo que você deseja exibir -->
                        <td>
                            <form action="{{route('ideia.update')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="ideia_id" value="{{$ideia->ideia_id}}">
                                <input type="hidden" name="ideia_aprovada" value="1">
                                <button type="submit" class="accept-btn">Aceitar</button>
                            </form>
                            <a href="/ideia-{{$ideia->ideia_id}}">Saiba Mais</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
