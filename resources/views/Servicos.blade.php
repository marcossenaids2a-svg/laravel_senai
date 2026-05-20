@extends('layouts.principal')
@section('title', 'Servicos - Relampago Marquinhos')

@push('styles')
  <style>
    body { background: #f5f6f8; }
    .service-card { height: 100%; border-radius: 8px; border: 1px solid #dee2e6; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
    .service-card h4 { font-weight: 800; }
  </style>
@endpush

@section('content')
<main class="container py-5">
  <h1 class="text-center mb-4">Nossos servicos</h1>
  <div class="row g-4">
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Troca de Oleo</h4><p>Servico rapido para sua moto.</p><button class="btn btn-danger btn-servico" data-servico="Troca de oleo">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Revisao completa</h4><p>Deixe sua moto segura para rodar.</p><button class="btn btn-danger btn-servico" data-servico="Revisao completa">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Troca de pneus</h4><p>Pneus novos com instalacao.</p><button class="btn btn-danger btn-servico" data-servico="Troca de pneus">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Lavagem premium</h4><p>Deixe sua moto limpa e brilhando.</p><button class="btn btn-danger btn-servico" data-servico="Lavagem premium">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Motor completo</h4><p>Reparo completo do motor.</p><button class="btn btn-danger btn-servico" data-servico="Motor completo">Agendar</button></div></div>
    <div class="col-12 col-md-4"><div class="card service-card text-center p-4"><h4>Diagnostico eletronico</h4><p>Descubra problemas na hora.</p><button class="btn btn-danger btn-servico" data-servico="Diagnostico eletronico">Agendar</button></div></div>
  </div>
</main>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/Servicos.js"></script>
@endpush
