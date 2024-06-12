
@extends('layouts.base')
@section('title', 'Cadastre-se')

@section('content')
<a href="/">Voltar</a>
  <div class="main-content ">
    <div class="login-form">
      <h2>Cadastro Investify</h2>
      <form class="row mb-3 needs-validation" action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="form-group col-md-6">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="Nome" placeholder="Digite seu Nome" name="nome" required>
        </div>
        <div class="form-group col-md-6">
            <label for="nome">Sobrenome</label>
            <input type="text" class="form-control" id="Nome" placeholder="Digite seu Sobrenome" name="sobrenome" required>
          </div>
        <div class="form-group col-md-6">
          <label for="email ">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Telefone">Telefone</label>
          <input type="number" class="form-control" id="telefone" placeholder="Digite seu telefone" name="telefone" required>
        </div>
        <div class="form-group col-md-6">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
        </div>
        <div class="form-group col-md-4">
          <label for="cpf">Cpf</label>
          <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF" name="cpf"
        title="Digite um CPF no formato: xxx.xxx.xxx-xx" required>
        </div>
        <div class="form-group col-md-6">
            <label for="nascimento">Data de nascimento</label>
            <input type="date" class="form-control" id="nascimento" name="nascimento" required>
          </div>
        <div class="form-group col-md-3">
          <label for="genero">Gênero</label>
          <br>
          <input type="radio" name="genero" value="1" >Masculino
          <br>
          <input type="radio" name="genero" value="2" >Feminino
          <br>
          <input type="radio" name="genero" value="3" >Outros
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit" >Registrar</button>
      </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Função para validar o formulário
    function validateForm(event) {
      const form = event.target;
      if (!form.checkValidity()) {
        event.preventDefault(); // Impede o envio do formulário se houver erros
        event.stopPropagation();
      }
      form.classList.add('was-validated'); // Adiciona a classe para estilizar campos inválidos
    }

    // Adicione um ouvinte de evento ao formulário
    const formElement = document.querySelector('.needs-validation');
    formElement.addEventListener('submit', validateForm);
  </script>
@endsection
