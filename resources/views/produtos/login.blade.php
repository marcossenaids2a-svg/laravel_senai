<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Relampago Marquinhos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { min-height: 100vh; background: #f2f4f7; }
    .page-center { min-height: calc(100vh - 56px); display: flex; align-items: center; justify-content: center; padding: 32px 16px; }
    .login-card { width: 100%; max-width: 420px; padding: 32px; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08); }
    .login-card a { color: #dc3545; text-decoration: none; }
    .login-card a:hover { text-decoration: underline; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">Relampago Marquinhos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Abrir menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('motos') }}">Motos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('servicos') }}">Servicos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="page-center">
  <form class="login-card" id="formLogin">
    <h1 class="h2 text-center mb-4">Login</h1>

    <label class="form-label" for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control mb-3" placeholder="Seu email" required>

    <label class="form-label" for="senha">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control mb-3" placeholder="Sua senha" required>

    <button type="submit" class="btn btn-danger w-100 mb-2">Entrar</button>

    <p class="text-center small mb-2">
      <a href="{{ route('esqueci-senha') }}">Esqueci minha senha</a>
    </p>

    <p class="text-center small mb-0">
      Nao tem conta? <a href="{{ route('cadastro') }}">Criar conta</a>
    </p>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('formLogin').addEventListener('submit', function (event) {
    event.preventDefault();
    Swal.fire({ icon: 'success', title: 'Login enviado', text: 'O formulario esta funcionando.', confirmButtonColor: '#dc3545' });
  });
</script>
</body>
</html>
