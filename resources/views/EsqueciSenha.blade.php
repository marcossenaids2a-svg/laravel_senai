@extends('layouts.principal')
@section('title', 'Recuperar Senha - Relampago Marquinhos')

@push('styles')
  <style>
    body { min-height: 100vh; background: #f2f4f7; }
    .page-center { min-height: calc(100vh - 56px); display: flex; align-items: center; justify-content: center; padding: 32px 16px; }
    .form-card { width: 100%; max-width: 430px; padding: 32px; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08); }
    .form-card a { color: #dc3545; text-decoration: none; }
  </style>
@endpush

@section('content')
<main class="page-center">
  <form class="form-card" id="formRecuperar" action="{{ route('esqueci-senha.submit') }}" method="POST">
    @csrf
    <h1 class="h2 text-center mb-4">Esqueci a senha</h1>
    @if(session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif
    <label class="form-label" for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control mb-3" placeholder="Digite seu email" required>
    <button class="btn btn-danger w-100 mb-2" type="submit">Enviar</button>
    <p class="text-center small mb-0"><a href="{{ route('login') }}">Voltar ao login</a></p>
  </form>
</main>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/EsqueciSenha.js"></script>
@endpush
