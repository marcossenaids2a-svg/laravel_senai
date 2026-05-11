<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicos - Relampago Marquinhos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f5f6f8; }
    .service-card { height: 100%; border-radius: 8px; border: 1px solid #dee2e6; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
    .service-card h4 { font-weight: 800; }
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
        <li class="nav-item"><a class="nav-link active" href="{{ route('servicos') }}">Servicos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container py-5">
  <h1 class="text-center mb-4">Nossos servicos</h1>
  <div class="row g-4">
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Troca de oleo</h4><p>Servico rapido para sua moto.</p><button class="btn btn-danger btn-servico" data-servico="Troca de oleo">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Revisao completa</h4><p>Deixe sua moto segura para rodar.</p><button class="btn btn-danger btn-servico" data-servico="Revisao completa">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Troca de pneus</h4><p>Pneus novos com instalacao.</p><button class="btn btn-danger btn-servico" data-servico="Troca de pneus">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Lavagem premium</h4><p>Deixe sua moto limpa e brilhando.</p><button class="btn btn-danger btn-servico" data-servico="Lavagem premium">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Motor completo</h4><p>Reparo completo do motor.</p><button class="btn btn-danger btn-servico" data-servico="Motor completo">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Diagnostico eletronico</h4><p>Descubra problemas na hora.</p><button class="btn btn-danger btn-servico" data-servico="Diagnostico eletronico">Agendar</button></div></div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.querySelectorAll('.btn-servico').forEach(function (botao) {
    botao.addEventListener('click', function () {
      Swal.fire({ icon: 'success', title: 'Servico agendado', text: botao.dataset.servico + ' foi selecionado.', confirmButtonColor: '#dc3545' });
    });
  });
</script>
</body>
</html>
