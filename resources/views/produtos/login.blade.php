@extends('layouts.principal')
@section('title', 'Login - Relampago Marquinhos')

@push('styles')
  <style>
    body { min-height: 100vh; background: #f2f4f7; }
    .page-center { min-height: calc(100vh - 56px); display: flex; align-items: center; justify-content: center; padding: 32px 16px; }
    .login-card { width: 100%; max-width: 420px; padding: 32px; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08); }
    .login-card a { color: #dc3545; text-decoration: none; }
    .login-card a:hover { text-decoration: underline; }
  </style>
@endpush

@section('content')
<main class="page-center">
  <form class="login-card" id="formLogin" action="{{ route('login.submit') }}" method="POST">
    @csrf
    <h1 class="h2 text-center mb-4">Login</h1>
    @if(session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

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
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/cadastro.js"></script>
@endpush
