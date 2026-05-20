@extends('layouts.principal')
@section('title', 'Ofertas - Relampago Marquinhos')

@push('styles')
  <style>
    body { background: #f5f6f8; }
    .offer-card { height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
    .offer-card img { width: 100%; height: 220px; object-fit: cover; }
    .old-price { text-decoration: line-through; color: #6c757d; }
    .new-price { color: #dc3545; font-size: 1.35rem; font-weight: 800; }
    footer { background: #000; color: #fff; text-align: center; padding: 18px; margin-top: 40px; }
  </style>
@endpush

@section('content')
<main class="container py-5">
  <h1 class="text-center mb-4">Promocoes da semana</h1>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card offer-card">
        <img src="https://autocdn.co.uk/cdn-cgi/imagedelivery/JC4X6oe6GKVO4ZI4xd1Czg/637364d0-e03b-4bcf-5ed9-a71141a1b800/raw" alt="Yamaha YZF-R1">
        <div class="card-body">
          <h5>Yamaha YZF-R1</h5>
          <p class="old-price mb-1">R$ 95.000</p>
          <p class="new-price">R$ 82.000</p>
          <button class="btn btn-danger w-100 btn-oferta" data-moto="Yamaha YZF-R1">Quero esta oferta</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card offer-card">
        <img src="https://cdn.motor1.com/images/mgl/zxq016/s3/honda-antecipa-mudancas-da-nova-cg-160-2025.jpg" alt="Honda CG 160">
        <div class="card-body">
          <h5>Honda CG 160</h5>
          <p class="old-price mb-1">R$ 15.000</p>
          <p class="new-price">R$ 13.500</p>
          <button class="btn btn-danger w-100 btn-oferta" data-moto="Honda CG 160">Quero esta oferta</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card offer-card">
        <img src="https://www.motoo.com.br/fotos/2022/11/1280_960/kawasaki_ninja-ev_2023_16_15112022_51416_1280_960.jpg" alt="Kawasaki Ninja">
        <div class="card-body">
          <h5>Kawasaki Ninja</h5>
          <p class="old-price mb-1">R$ 70.000</p>
          <p class="new-price">R$ 61.000</p>
          <button class="btn btn-danger w-100 btn-oferta" data-moto="Kawasaki Ninja">Quero esta oferta</button>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>2026 MotoStore</footer>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/ofertas.js"></script>
@endpush
