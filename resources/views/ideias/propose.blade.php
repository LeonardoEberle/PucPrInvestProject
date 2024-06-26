@extends('layouts.main')
@section('title', 'fazer proposta')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">envie sua proposta</h1>
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="ide_nome">Valor</label>
            <input type="number" class="form-control" id="ide_nome" name="nome" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="ide_descricao">Objetivo</label>
            <textarea class="form-control" id="ide_descricao" name="descricao" rows="3" maxlength="500" required></textarea>
        </div>
    </form>
</div>
@endsection
