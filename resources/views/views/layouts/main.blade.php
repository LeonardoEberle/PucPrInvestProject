<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/Styles.css">
    <script src="/js/Scripts.js"></script>

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    {{-- bootstrap Css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="{{route('welcome')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.form')}}" class="nav-link">Registre-se</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('login.form')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Perfil</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
<footer>
    <p>all rights reserved to <a href="#">InvestPUCfy</a> &copy; 2024</p>
    {{-- Ionic icons --}}
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</footer>
</html>
