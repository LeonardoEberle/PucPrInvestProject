@extends('layouts.main')
@section('title', 'Propostas')

@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h3>Propostas</h3>
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">Objetivo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propostas as $proposta)
                    <tr>
                        <td>{{ $proposta->proposta_objetivo}}</td>
                        <td>{{ $proposta->proposta_valor}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
