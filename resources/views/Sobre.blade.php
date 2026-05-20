@extends('layouts.principal')
@section('title', 'Sobre - Relampago Marquinhos')

@push('styles')
  <style>
    body { background: #f5f6f8; }
    .about-box { background: #fff; border: 1px solid #dee2e6; border-radius: 8px; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
  </style>
@endpush

@section('content')
<main class="container py-5">
  <h1 class="text-center mb-4">Sobre nos</h1>
  <section class="about-box p-4 p-md-5">
    <p>A <strong>MotoStore</strong> e uma loja especializada em motos esportivas, urbanas e de alta performance.</p>
    <p>Nosso objetivo e oferecer motos de qualidade, atendimento rapido e bons precos para cada cliente.</p>
    <p>Trabalhamos com marcas como Yamaha, Honda, Kawasaki, BMW, Suzuki e Ducati.</p>
    <button class="btn btn-danger mt-3" id="btnHistoria">Ver nossa historia</button>
  </section>
</main>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
