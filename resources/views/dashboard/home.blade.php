@extends('layouts.main')
@section('title', 'Home')

@section('content')

      <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a class="card-title text-decoration-none" href="#">MEU PERFIL</a>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a class="card-title text-decoration-none" href="#">MINHAS IDEIAS</a>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a class="card-title" href="#">MINHA CARTEIRA</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a class="card-title text-decoration-none" href="#">PROPOSTAS</a>

              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
