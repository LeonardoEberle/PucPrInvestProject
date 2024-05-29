@extends('layouts.base')
@section('title', 'login')

@section('content')
@if (session('error'))
    <div>{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="main-content">
    <div class="login-form">
      <h2>Login Investify</h2>
      <form action="{{route('login.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function validateForm(event) {
      const form = event.target;
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }
    const formElement = document.querySelector('.needs-validation');
    formElement.addEventListener('submit', validateForm);
  </script>
@endsection
