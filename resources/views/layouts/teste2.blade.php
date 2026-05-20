<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Relampago Marquinhos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body { padding-top: 56px; }
    </style>
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">Relampago Marquinhos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navPrincipal" aria-controls="navPrincipal" aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navPrincipal">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('inicio', 'home') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('motos') ? 'active' : '' }}" href="{{ route('motos') }}">Motos</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('ofertas') ? 'active' : '' }}" href="{{ route('ofertas') }}">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('servicos') ? 'active' : '' }}" href="{{ route('servicos') }}">Servicos</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('sobre') ? 'active' : '' }}" href="{{ route('sobre') }}">Sobre</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('contato') ? 'active' : '' }}" href="{{ route('contato') }}">Contato</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('cadastro-produto') ? 'active' : '' }}" href="{{ route('cadastro-produto') }}">Produto</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('cadastro-2') ? 'active' : '' }}" href="{{ route('cadastro-2') }}">Cadastro 2</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
