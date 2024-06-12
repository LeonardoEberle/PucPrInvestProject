@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mt-5">
          <h1 class="mb-4">Tabela de Investimentos</h1>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID Ideia</th>
                <th scope="col">Valor Investido</th>
                <th scope="col">Data de Início</th>
                <th scope="col">Participação (%)</th>
                <th scope="col">Receita</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>50000.00</td>
                <td>2024-01-15 10:00:00</td>
                <td>25</td>
                <td>120000.00</td>
              </tr>
              <!-- Adicione mais linhas conforme necessário -->
            </tbody>
          </table>
        </div>
    </div>
</div>

@endsection
