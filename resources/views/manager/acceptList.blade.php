@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="container" id="aceite">
    <table>
        <tr>
            <th>Título</th>
            <th>Informações</th>
            <th>Ações</th>
        </tr>
        <tr>
            <td>{{ $ideia->ideia_nome }}</td>
            <td>{{$ideia->ideia_descricao}}</td>
            <td>
                <button class="accept-btn" onclick="accept()">Aceitar</button>
                <button class="reject-btn" onclick="reject()">Recusar</button>
                <button class="view-more-btn" onclick="viewMore(/ideia-{{$ideia->ideia_id}})">Ver Mais</button>
            </td>
        </tr>
      <!--  <tr>
            <td>Título 2</td>
            <td>Informações sobre o investimento 2</td>
            <td>
                <button class="accept-btn" onclick="accept()">Aceitar</button>
                <button class="reject-btn" onclick="reject()">Recusar</button>
                <button class="view-more-btn" onclick="viewMore()">Ver Mais</button>
            </td>
        </tr> -->
    </table>
</div>
@endsection
