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
          <button class="btn btn-danger btn-comprar" data-moto="Yamaha YZF-R1" data-preco="95000">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://cdn.motor1.com/images/mgl/zxq016/s3/honda-antecipa-mudancas-da-nova-cg-160-2025.jpg" alt="Honda CG 160">
        <div class="card-body text-center">
          <h5>Honda CG 160</h5>
          <p class="price">R$ 15.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Honda CG 160" data-preco="15000">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://www.motoo.com.br/fotos/2022/11/1280_960/kawasaki_ninja-ev_2023_16_15112022_51416_1280_960.jpg" alt="Kawasaki Ninja">
        <div class="card-body text-center">
          <h5>Kawasaki Ninja</h5>
          <p class="price">R$ 70.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Kawasaki Ninja" data-preco="70000">Comprar</button>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="row g-4">
   <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2024/08/honda-biz-125-ex-lateral-dianteiro-direito-vermelho.webp?w=1200&h=630&crop=1" alt="Biz 125">
        <div class="card-body text-center">
          <h5>Biz 125</h5>
          <p class="price">R$ 16.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Biz 125" data-preco="16000">Comprar</button>
        </div>
      </div>
    </div>
  <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://powerhusky.com.br/wp-content/uploads/2025/08/PHO_BIKE_DET_my25-ktm-350-ecx-f-1.png" alt="KTM-350 SXF">
        <div class="card-body text-center">
          <h5>KTM-350 SXF</h5>
          <p class="price">R$ 25.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="KTM-350 SXF" data-preco="25000">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://s2.glbimg.com/fH9rW7VtSLxR6NklNwr3egzyTnw=/s.glbimg.com/jo/g1/f/original/2013/06/13/antes1.jpg" alt="BMW R 1200 GS">
        <div class="card-body text-center">
          <h5>BMW R 1200 GS</h5>
          <p class="price">R$ 85.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="BMW R 1200 GS" data-preco="85000">Comprar</button>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="row g-4">
   <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://dealersites-content.s3.us-east-1.amazonaws.com/dealersites/vehicles/models/honda/foto890_46997.webp" alt="Honda PCX">
        <div class="card-body text-center">
          <h5>Honda PCX</h5>
          <p class="price">R$ 26.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Honda PCX" data-preco="26000">Comprar</button>
        </div>
      </div>
    </div>
  
   <div class="col-md-4">
      <div class="card moto-card">
        <img src="https://static-img.motorleads.co/zemahondamotos/3771bb90c1ce69cd-mobile-pop-110i-es.jpg" alt="Honda POP 110i">
        <div class="card-body text-center">
          <h5>Honda POP 110i</h5>
          <p class="price">R$ 9.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Honda POP 110i" data-preco="9000">Comprar</button>
        </div>
      </div>
    </div>
  
   <div class="col-md-4">
      <div class="card moto-card">
        <img src="data:image/jpeg;base64,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" alt="Honda Elite 125">
        <div class="card-body text-center">
          <h5>Honda Elite 125</h5>
          <p class="price">R$ 12.000</p>
          <button class="btn btn-danger btn-comprar" data-moto="Honda Elite 125" data-preco="12000">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<section class="container py-5">
  <h2 class="text-center mb-4">Depoimentos de clientes</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <p>"Comprei minha Honda CG 160 aqui e estou super satisfeito! Atendimento excelente e entrega rápida."</p>
          <h6 class="card-subtitle mt-3 text-muted">João Silva</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <p>"A Yamaha YZF-R1 é simplesmente incrível! A loja me ajudou a escolher a melhor opção para mim."</p>
          <h6 class="card-subtitle mt-3 text-muted">Maria Oliveira</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <p>"A Kawasaki Ninja é minha paixão! A loja tem ótimos preços e um atendimento de primeira."</p>
          <h6 class="card-subtitle mt-3 text-muted">Carlos Pereira</h6>
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
