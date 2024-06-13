<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    {{-- Script --}}
    <script src="/js/Scripts.js"></script>
    <script src="../js/color-modes.js"></script>

    {{-- Fonte --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- estilizacao externa --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">

    {{-- CSS ARQUIVOS --}}
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/userViews.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/ideia.css">
    <link rel="stylesheet" href="css/paginaideia.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">
                <img src="../img/logo.jpeg  " alt="Logo">
                <span class="ml-2">INVESTIFY</span>
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">INVESTIFY</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                                    href="/dashboard">HOME</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="/ideias">EMPREENDIMENTOS</a>
                            </li>
                            @if (Auth::user()->usuario_cargo != 2)
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="#">ACEITE</a>
                                </li>
                            @endif
                            @if (Auth::user()->usuario_cargo != 3)
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="{{route('mylist')}}">MEUS EMPREENDIMENTOS</a></li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">PROPOSTAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="{{route('ideia.form')}}">CRIAR NOVAS IDÉIAS</a>
                            </li>
                            @endif
                        </ul>
                        <hr class="my-3">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2"
                                    href="{{ route('user.profile') }}">{{ strtoupper(Auth::user()->usuario_nome) }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2"
                                    href="{{ route('login.destroy') }}">SAIR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="content">
                    @yield('content')
                </div>
            </main>




            <script src="../js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
                integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
            </script>
            <script src="../js/dashboard.js"></script>
</body>
<footer>
    <div class="container">
        <p>Informações de Contato: investify@email.com | Telefone: (41) 01234-5678</p>
        <p>&copy; 2024 INVESTIFY. Todos os direitos reservados.</p>
    </div>
</footer>

</html>
