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
                            <button class="accept-btn">Aceitar</button>
                            <button class="reject-btn">Recusar</button>
                            <a href="" class="view-more-btn" >Ver Mais</a> <!-- Altere 'ideia_id' conforme necessário -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
