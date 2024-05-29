<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/cadastro.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="img/WhatsApp Image 2024-05-22 at 15.59.58.jpeg" alt="Logo">
            <span class="ml-2">INVESTIFY</span>
          </a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link btn" href="{{route('user.form')}}" role="button">Cadastre-se</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link btn" href="{{route('login.form')}}" role="button">Login</a>
                </li>
            </ul>
        </div>
      </nav>
    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<footer>
    <div class="container">
      <p>Informações de Contato: investify@email.com | Telefone: (11) 01234-5678</p>
      <p>&copy; 2024 INVESTIFY. Todos os direitos reservados.</p>
    </div>
  </footer>
</html>
