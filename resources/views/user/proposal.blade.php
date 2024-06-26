@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="content">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <h3>Propostas</h3>
            <table class="table caption-top">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome do investidor</th>
                <th scope="col">Valor oferecido</th>
                <th scope="col">Porcentagem de compra</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
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
