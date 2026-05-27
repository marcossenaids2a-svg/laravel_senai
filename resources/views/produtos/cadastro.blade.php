@extends('layouts.teste2')

@section('title', 'Cadastro de Produto')

@push('styles')
<style>
    body {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .produto-page {
        min-height: calc(100vh - 56px);
        display: flex;
        align-items: center;
        padding: 2rem 0;
    }

    .produto-panel {
        border: 0;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 18px 36px rgba(2, 6, 23, 0.15);
    }

    .produto-header {
        background: #0f172a;
        color: #fff;
        padding: 24px;
    }

    .produto-header h1 {
        margin: 0;
        font-size: clamp(1.4rem, 4vw, 2rem);
        font-weight: 800;
    }

    .produto-header p {
        margin: 6px 0 0;
        color: #cbd5e1;
    }

    .produto-panel .form-label {
        font-weight: 700;
        color: #1e293b;
    }

    .produto-panel .form-control {
        border-radius: 10px;
        min-height: 44px;
    }

    .produto-panel textarea.form-control {
        min-height: 110px;
    }
</style>
@endpush

@section('content')
<main class="produto-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">
                <section class="card produto-panel">
                    <div class="produto-header">
                        <h1>Cadastrar Produto</h1>
                        <p>Ao salvar, o produto vai para o banco e voce sera redirecionado para a lista.</p>
                    </div>

                    <form method="POST" action="{{ route('cadastro-produto.store') }}" novalidate>
                        @csrf

                        <div class="card-body p-3 p-md-4">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Confira os campos:</strong>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $erro)
                                            <li>{{ $erro }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="nome" class="form-label">Nome do produto</label>
                                    <input type="text" id="nome" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required>
                                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="descricao" class="form-label">Descricao</label>
                                    <textarea id="descricao" name="descricao" class="form-control @error('descricao') is-invalid @enderror" placeholder="Detalhes do produto">{{ old('descricao') }}</textarea>
                                    @error('descricao') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="preco" class="form-label">Preco (R$)</label>
                                    <input type="number" step="0.01" min="0" id="preco" name="preco" class="form-control @error('preco') is-invalid @enderror" value="{{ old('preco') }}" required>
                                    @error('preco') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="quantidade" class="form-label">Quantidade</label>
                                    <input type="number" min="0" id="quantidade" name="quantidade" class="form-control @error('quantidade') is-invalid @enderror" value="{{ old('quantidade') }}" required>
                                    @error('quantidade') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="categoria" class="form-label">Categoria</label>
                                    <input type="text" id="categoria" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria') }}" placeholder="Ex: Acessorio">
                                    @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="data_validade" class="form-label">Data de validade</label>
                                    <input type="date" id="data_validade" name="data_validade" class="form-control @error('data_validade') is-invalid @enderror" value="{{ old('data_validade') }}">
                                    @error('data_validade') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white p-3 p-md-4 d-flex flex-column flex-sm-row gap-2 justify-content-sm-end">
                            <a href="{{ route('listar-produto') }}" class="btn btn-outline-secondary">Ver lista de produtos</a>
                            <button type="submit" class="btn btn-success">Cadastrar produto</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
