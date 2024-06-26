
@extends('layouts.base')
@section('title', 'Cadastre-se')

@section('content')
<div class="main-content">
    <div class="login-form">
        <a href="/">Voltar</a>
        <h2>Cadastro Investify</h2>
        <form class="row mb-3 needs-validation" action="{{route('user.store')}}" method="POST" novalidate>
            @csrf
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="Nome" placeholder="Digite seu Nome" name="nome" required>
            </div>
            <div class="form-group col-md-4">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="Sobrenome" placeholder="Digite seu Sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control" id="telefone" placeholder="Digite seu telefone" name="telefone" required>
            </div>
            <div class="form-group col-md-4">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
            </div>
            <div class="form-group col-md-4">
                <label for="confirmarSenha">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" name="" required>
            </div>
            <div class="form-group col-md-4">
                <label for="cpf">Cpf</label>
                <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF" name="cpf" title="Digite um CPF no formato: xxx.xxx.xxx-xx" required>
            </div>
            <div class="form-group col-md-4">
                <label for="nascimento">Data de nascimento</label>
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
            </div>
            <div class="form-group col-md-3" aria-required="true">
                <label for="genero">Gênero</label>
                <br>
                <input type="radio" name="genero" value="1"> Masculino
                <br>
                <input type="radio" name="genero" value="2"> Feminino
                <br>
                <input type="radio" name="genero" value="3"> Outros
            </div>
            <div class="form-group col-md-12">
                <button class="btn btn-primary w-100 py-2" type="submit">Registrar</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/cadastro.js"></script>
@endsection
