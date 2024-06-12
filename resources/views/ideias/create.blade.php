@extends('layouts.main')
@section('title', 'criar ideia')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Cadastre sua Ideia</h1>
        <form method="POST" action="{{route('ideia.store')}}">
            @csrf
            <div class="form-group">
                <label for="ide_nome">Nome</label>
                <input type="text" class="form-control" id="ide_nome" name="nome" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="ide_descricao">Descrição</label>
                <textarea class="form-control" id="ide_descricao" name="descricao" rows="3" maxlength="500" required></textarea>
            </div>
            <div class="form-group">
                <label for="ide_tipo">categoria</label>
                <select class="form-control" id="ide_tipo" name="categoria" required>
                    <option value="">Selecione o tipo de investimento</option>
                    <option value="1">Tecnologia</option>
                    <option value="2">Negócios</option>
                    <option value="3">Alimentício</option>
                    <option value="4">Saúde</option>
                    <option value="5">Construção</option>
                    <option value="6">Financeiro</option>
                    <option value="7">Consultoria</option>
                    <option value="8">Indústria</option>
                    <option value="9">Energia</option>
                    <option value="10">Turismo</option>
                    <option value="11">Outros</option>
                </select>
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
                    <option value="">Selecione a fase de operacao</option>
                    <option value="1">ativo</option>
                    <option value="2">inativo</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="ide_cnpj">CNPJ</label>
                    <input type="text" class="form-control" id="ide_cnpj" name="cnpj" maxlength="14" required>
                </div>
                <div class="form-group">
                    <label for="ide_valorInicio">Valor Inicial</label>
                    <input type="number" step="0.01" class="form-control" id="ideia_valormercado" name="valormercado" min="0" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
@endsection
