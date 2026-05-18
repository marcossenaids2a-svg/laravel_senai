<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - Relampago Marquinhos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f5f6f8; }
    .contact-box { max-width: 640px; margin: 0 auto; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">Relampago Marquinhos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Abrir menu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('motos') }}">Motos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('servicos') }}">Servicos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ route('contato') }}">Contato</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container py-5">
  <h1 class="text-center mb-4">Contato</h1>
  <form id="formContato" class="contact-box p-4" action="{{ route('contato.submit') }}" method="POST">
    @csrf
    @if(session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif
    <label class="form-label" for="nome">Nome</label>
    <input type="text" class="form-control mb-3" placeholder="Seu nome" id="nome" required>
    <label class="form-label" for="email">Email</label>
    <input type="email" class="form-control mb-3" placeholder="Seu email" id="email" required>
    <label class="form-label" for="mensagem">Mensagem</label>
    <textarea class="form-control mb-3" placeholder="Sua mensagem" id="mensagem" rows="5" required></textarea>
    <button class="btn btn-danger w-100" type="submit">Enviar</button>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
</script>
</body>
</html>
