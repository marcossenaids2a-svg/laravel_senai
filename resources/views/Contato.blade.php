@extends('layouts.principal')
@section('title', 'Contato - Relampago Marquinhos')

@push('styles')
  <style>
    body { background: #f5f6f8; }
    .contact-box { max-width: 640px; margin: 0 auto; background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
  </style>
@endpush

@section('content')
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
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
