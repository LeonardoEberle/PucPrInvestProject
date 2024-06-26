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
                @switch($ideia->ideia_riscoID)
                    @case(1)
                        <p>Baixo</p>
                        @break
                    @case(2)
                        <p>Baixo-medio</p>
                        @break
                    @case(3)
                        <p>Medio</p>
                        @break
                    @case(4)
                        <p>Alto-medio</p>
                        @break
                    @case(5)
                        <p>Alto</p>
                        @break
                    @default
                        <p>nao ha um nivel de risco definido</p>
            @endswitch
            </div>
            <a href="" class="dropbtn">Fazer Proposta</a>
            @if (Auth::user()->usuario_cargo != 2)
                <form action="{{route('ideia.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="ideia_riscoID" value="{{$ideia->ideia_riscoID}}">
                    <div class="form-group">
                        <label for="ide_tipo">fase de operacao</label>
                        <select class="form-control" name="ideia_riscoID" required>
                            <option value="">Selecione o nivel de risco do projeto</option>
                            <option value="1">baixo</option>
                            <option value="2">baixo-medio</option>
                            <option value="3">medio</option>
                            <option value="4">alto-medio</option>
                            <option value="4">alto</option>
                        </select>
                        <button type="submit" class="accept-btn">alterar nivel de risco</button>
                    </div>
                </form>
            @endif
        </div>
    @endsection
