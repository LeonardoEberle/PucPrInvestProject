@extends('layouts.main')
@section('title', 'Perfil')

@section('content')
    <h1 class="mb-4">Editar Usuário</h1>
        <form>
          <div class="form-group" method="POST" action="{{route('user.update')}}">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" maxlength="50" value="{{$usuario->usu_email}}">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->usu_nome}}">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" value="{{$usuario->usu_telefone}}">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
@endsection
