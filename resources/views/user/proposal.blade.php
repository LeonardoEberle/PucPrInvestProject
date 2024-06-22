@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="content">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <table class="table caption-top">
            <caption>Propostas</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Empresa</th>
                <th scope="col">Valor oferecido</th>
                <th scope="col">Porcentagem de compra</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{$ideia->ideia_nome}}</td>
                <td>R$200.000</td>
                <td>80%</td>
              </tr>
            </tbody>
          </table>
            </div>
          </div>
        </div>
        <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="../js/dashboard.js"></script></body>
</div>
@endsection
