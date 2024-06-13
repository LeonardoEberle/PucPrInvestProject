@extends('layouts.main')
@section('title', 'Carteira')

@section('content')

<div>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mt-5">
          <h1 class="mb-4">Tabela de Investimentos</h1>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome ideia</th>
                <th scope="col">Data de Início</th>
                <th scope="col">Aprovada</th>
                <th scope="col">valor De Mercado</th>
                <th scope="col">acoes</th>
              </tr>
            </thead>
            @foreach ($ideias as $ideia)
            <tbody>
                <tr>
                  <td>{{$ideia->ideia_nome}}</td>
                  <td>{{$ideia->ideia_dataRegistro}}</td>
                  @switch($ideia->ideia_aprovada)
                      @case(0)
                      <td>Reprovado</td>
                          @break
                      @default
                      <td>Aprovado</td>
                  @endswitch
                  <td>{{$ideia->ideia_valorMercado}}</td>
                  <td><a href="/atualizarideia-{{$ideia->ideia_id}}">Editar</a></td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
              </tbody>
            @endforeach
          </table>
        </div>
    </div>
</div>

@endsection
