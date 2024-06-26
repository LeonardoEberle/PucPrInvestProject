@extends('layouts.main')
@section('title', 'Propostas')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h3>Propostas Enviadas</h3>
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">Empresa</th>
                            <th scope="col">Objetivo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($propostas as $proposta)
                            @foreach ($ideias as $ideia)
                                @if ($ideia->ideia_id == $proposta->proposta_ideiaID)
                                    <tr>
                                        <td>{{ $ideia->ideia_nome }}</td>
                                        <td>{{ $proposta->proposta_objetivo }}</td>
                                        <td>{{ $proposta->proposta_valor }}</td>
                                        <td>
                                            @switch($proposta->proposta_status)
                                                @case(1)
                                                    Aprovado
                                                @break

                                                @case(2)
                                                    Reprovado
                                                @break

                                                @default
                                                    Aguardando
                                            @endswitch
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <h3>Propostas Recebidas</h3>
            <div class="col">
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">Objetivo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acao</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($propostasrec as $proprec)
                        <tr>
                            <td>{{ $proprec->proposta_objetivo }}</td>
                            <td>{{ $proprec->proposta_valor }}</td>
                            <td>
                                @switch($proprec->proposta_status)
                                    @case(0)
                                        <form action="{{route('proposta.update')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="proposta_status" value="1">
                                            <input type="hidden" name="proposta_id" value="{{$proprec->proposta_id}}">
                                            <button type="submit">Aceitar</button>
                                        </form>
                                        <form action="{{route('proposta.update')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="proposta_status" value="2">
                                            <input type="hidden" name="proposta_id" value="{{$proprec->proposta_id}}">
                                            <button type="submit">Recusar</button>
                                        </form>
                                        @break
                                    @case(1)
                                        Proposta aceita
                                        @break
                                    @case(2)
                                        proposta recusada
                                        @break
                                    @default
                                @endswitch

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
