@extends('layouts.main')
@section('title', 'visualizar ideia')

@section('content')
    <div class="container" id="ideia">
        <div class="tabs">
            <div class="tab-header">
                <h2>{{ $ideia->ideia_nome }}</h2>
            </div>
            <div class="footer">
                <p>Descricao:{{$ideia->ideia_descricao}}</p>
                <p>CNPJ:{{$ideia->ideia_cnpj}}</p>
                @switch($ideia->ideia_faseID)
                    @case(1)
                        <p>Estado de: Planejamento</p>
                        @break
                    @case(2)
                        <p>Estado de: Desenvolvimento</p>
                        @break
                    @case(3)
                        <p>Estado de: Execucao</p>
                        @break
                    @case(4)
                        <p>Estado de: Andamento</p>
                        @break
                    @default
                        <p>nao foi possivel exibir</p>
                @endswitch
                <p>Valor: {{$ideia->ideia_valorMercado}}</p>
                <p>risco nivel: {{$ideia->ideia_riscoID}}</p>
            </div>
            <button class="dropbtn">Fazer Proposta</button>
        </div>
    @endsection
