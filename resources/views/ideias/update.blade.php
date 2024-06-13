@extends('layouts.main')
@section('title', 'update ideia')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">alterar dados de {{$ideia->ideia_nome}}</h1>
    <form method="POST" action="{{route('ideia.update')}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ide_nome">Nome</label>
            <input type="text" class="form-control" id="ide_nome" name="nome" maxlength="100" required value="{{$ideia->ideia_nome}}">
        </div>
        <div class="form-group">
            <label for="ide_descricao">Descrição</label>
            <textarea class="form-control" id="ide_descricao" name="descricao" rows="3" maxlength="500" required>{{$ideia->ideia_descricao}}</textarea>
        </div>
        <div class="form-group">
            <label for="ide_tipo">fase de operacao</label>
            <select class="form-control" id="ide_tipo" name="fase" required>
                <option value="">Selecione a fase de operacao</option>
                <option value="1">planejamento</option>
                <option value="2">desenvolvimento</option>
                <option value="3">execucao</option>
                <option value="4">andamento</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ide_tipo">status do projeto</label>
            <select class="form-control" id="ide_tipo" name="status" required>
                <option value="">Status do projeto</option>
                <option value="1">ativo</option>
                <option value="2">inativo</option>
            </select>
        </div>
            <div class="form-group">
                <label for="ide_valorInicio">Valor de mercado</label>
                <input type="number" step="0.01" class="form-control" id="ideia_valormercado" name="valormercado" min="0" required value="{{$ideia->ideia_valorMercado}}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">salvar</button>
    </form>
    <form action="" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-btn">Deletar ideia</button>
    </form>
</div>
@endsection
