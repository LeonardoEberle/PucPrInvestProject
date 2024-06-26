@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div class="container bg-dark mt-5" id="ideias">
    <h2>Ideias Disponíveis</h2>
    <div class="search-bar mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por título...">
    </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const ideasTable = document.getElementById('ideasTable');
        const rows = ideasTable.getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function () {
            const filter = searchInput.value.toLowerCase();

            for (let i = 0; i < rows.length; i++) {
                const title = rows[i].getElementsByTagName('td')[0]; // Coluna do título
                if (title) {
                    const textValue = title.textContent || title.innerText;
                    if (textValue.toLowerCase().indexOf(filter) > -1) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
        });
    });
</script>

@endsection
