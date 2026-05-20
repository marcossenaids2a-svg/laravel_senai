@extends('layouts.principal')
@section('title', 'Motos - Relampago Marquinhos')

@push('styles')
  <style>
    body { background: #f5f6f8; }
    .hero { min-height: 380px; display: flex; align-items: center; color: #fff; background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)), url('https://cdn.motor1.com/images/mgl/zxq016/s3/honda-antecipa-mudancas-da-nova-cg-160-2025.jpg') center/cover; }
    .hero h1 { font-size: clamp(2rem, 5vw, 4rem); font-weight: 800; }
    .moto-card { height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 24px rgba(0,0,0,.08); }
    .moto-card img { width: 100%; height: 230px; object-fit: cover; }
    .price { color: #dc3545; font-weight: 800; }
    .promo { background: #111; color: #fff; text-align: center; padding: 28px 16px; font-size: 1.35rem; font-weight: 700; }
    .galeria img { width: 100%; height: 220px; object-fit: cover; border-radius: 8px; }
    footer { background: #000; color: #fff; text-align: center; padding: 18px; }
  </style>
@endpush

@section('content')
<section class="hero">
  <div class="container">
    <h1>A moto dos seus sonhos esta aqui</h1>
    <p class="lead">As melhores motos com os melhores preços.</p>
    <a href="{{ route('ofertas') }}" class="btn btn-danger btn-lg">Ver ofertas</a>
  </div>
</section>

<section class="container py-5">
  <h2 class="text-center mb-4">Motos em destaque</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://autocdn.co.uk/cdn-cgi/imagedelivery/JC4X6oe6GKVO4ZI4xd1Czg/637364d0-e03b-4bcf-5ed9-a71141a1b800/raw" alt="Yamaha YZF-R1">
        <div class="card-body text-center">
          <h5>Yamaha YZF-R1</h5>
          <p class="price">R$ 95.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Yamaha YZF-R1">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://cdn.motor1.com/images/mgl/zxq016/s3/honda-antecipa-mudancas-da-nova-cg-160-2025.jpg" alt="Honda CG 160">
        <div class="card-body text-center">
          <h5>Honda CG 160</h5>
          <p class="price">R$ 15.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Honda CG 160">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://www.motoo.com.br/fotos/2022/11/1280_960/kawasaki_ninja-ev_2023_16_15112022_51416_1280_960.jpg" alt="Kawasaki Ninja">
        <div class="card-body text-center">
          <h5>Kawasaki Ninja</h5>
          <p class="price">R$ 70.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Kawasaki Ninja">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="promo">Promoções da semana com até 20% OFF</section>

<section class="container py-5">
  <h2 class="text-center mb-4">Fotos de clientes</h2>
  <div class="row g-3 galeria">
    <div class="col-md-4"><img src="https://imgcdn.oto.com/medium/gallery/exterior/88/2848/kawasaki-ninja-e-1-slant-rear-view-full-image-328634.jpg" alt="Cliente com Kawasaki Ninja"></div>
    <div class="col-md-4"><img src="https://s2.glbimg.com/0UaUIpOnGSOIZKMZYnufn4_Sk4U=/s.glbimg.com/jo/g1/f/original/2015/04/08/bmw_r_1200_gs_adventure.jpg" alt="Cliente com BMW"></div>
    <div class="col-md-4"><img src="https://t.ctcdn.com.br/cDHpJ5ZBeNkG_zpDXUtKFKbAeHk=/640x360/smart/i648597.jpeg" alt="Moto em destaque"></div>
  </div>
</section>

<footer>2026 MotoStore - Todos os direitos reservados</footer>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/motos.js"></script>
@endpush
