@extends('layouts.main')
@section('title', 'Perfil')

@section('content')
    <h1 class="mb-4">Editar Usuário</h1>
        <form method="POST" action="{{route('user.update')}}">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" maxlength="50" value="{{$usuario->usuario_email}}">
          </div>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->usuario_nome}}">
          </div>
          <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{$usuario->usuario_sobrenome}}">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" maxlength="15" value="{{$usuario->usuario_telefone}}">
          </div>
          <div class="form-group">
            <label for="Biografia">Biografia</label>
            <br>
            <textarea id="biografia" name="biografia" rows="4" cols="50">{{$usuario->usuario_biografia}}</textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
        <form action="{{route('user.delete')}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn">Deletar conta</button>
        </form>
@endsection
