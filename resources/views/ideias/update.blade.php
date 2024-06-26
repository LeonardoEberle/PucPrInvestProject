@extends('layouts.main')
@section('title', 'update ideia')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">alterar dados de {{$ideia->ideia_nome}}</h1>
    <form method="POST" action="{{route('ideia.update')}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="ideia_id" value="{{$ideia->ideia_id}}">
        <div class="form-group">
            <label for="ide_nome">Nome</label>
            <input type="text" class="form-control" id="ide_nome" name="ideia_nome" maxlength="100" required value="{{$ideia->ideia_nome}}">
        </div>
        <div class="form-group">
            <label for="ide_descricao">Descrição</label>
            <textarea class="form-control" id="ide_descricao" name="ideia_descricao" rows="3" maxlength="500" required>{{$ideia->ideia_descricao}}</textarea>
        </div>
        <div class="form-group">
            <label for="ide_tipo">fase de operacao</label>
            <select class="form-control" id="ide_tipo" name="ideia_faseID" required>
                <option value="">Selecione a fase de operacao</option>
                <option value="1">planejamento</option>
                <option value="2">desenvolvimento</option>
                <option value="3">execucao</option>
                <option value="4">andamento</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ide_tipo">status do projeto</label>
            <select class="form-control" id="ide_tipo" name="ideia_statusID" required>
                <option value="">Status do projeto</option>
                <option value="1">ativo</option>
                <option value="2">inativo</option>
            </select>
        </div>
            <div class="form-group">
                <label for="ide_valorInicio">Valor de mercado</label>
                <input type="number" step="0.01" class="form-control" id="ideia_valormercado" name="ideia_valorMercado" min="0" required value="{{$ideia->ideia_valorMercado}}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">salvar</button>
    </form>
    <form action="{{route('ideia.destroy')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="ideia_id" value="{{$ideia->ideia_id}}">
        <button type="submit" class="btn btn-danger delete-btn">Deletar ideia</button>
    </form>
</div>
@endsection
