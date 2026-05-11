<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Relampago Marquinhos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { min-height: 100vh; background: #f2f4f7; }
    .page-center { min-height: calc(100vh - 56px); display: flex; align-items: center; justify-content: center; padding: 32px 16px; }
    .form-card { width: 100%; max-width: 460px; padding: 32px; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08); }
    .form-card a { color: #dc3545; text-decoration: none; }
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
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="page-center">
  <form class="form-card" id="formCadastro">
    <h1 class="h2 text-center mb-4">Criar conta</h1>
    <label class="form-label" for="nome">Nome</label>
    <input type="text" id="nome" name="nome" class="form-control mb-3" placeholder="Seu nome" required>
    <label class="form-label" for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control mb-3" placeholder="Seu email" required>
    <label class="form-label" for="senha">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control mb-3" placeholder="Crie uma senha" required>
    <button class="btn btn-danger w-100 mb-2" type="submit">Cadastrar</button>
    <p class="text-center small mb-0">Ja tem conta? <a href="{{ route('login') }}">Entrar</a></p>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('formCadastro').addEventListener('submit', function (event) {
    event.preventDefault();
    Swal.fire({ icon: 'success', title: 'Cadastro enviado', text: 'Sua conta foi criada para teste.', confirmButtonColor: '#dc3545' });
  });
</script>
</body>
</html>
