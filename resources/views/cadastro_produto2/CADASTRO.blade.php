@extends('layouts.teste2')

@section('title', 'Cadastro de Produto')

@push('styles')
<style>
    body {
        background: #f4f6f9;
    }

    .produto-page {
        min-height: calc(100vh - 56px);
        display: flex;
        align-items: center;
    }

    .produto-panel {
        border: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 16px 42px rgba(15, 23, 42, .12);
    }

    .produto-header {
        background: #111827;
        color: #fff;
        padding: 24px;
    }

    .produto-header h1 {
        font-size: clamp(1.5rem, 4vw, 2rem);
        font-weight: 800;
        margin: 0;
    }

    .produto-header p {
        color: #d1d5db;
        margin: 6px 0 0;
    }

    .produto-panel .form-label {
        font-weight: 700;
        color: #1f2937;
    }

    .produto-panel .form-control {
        border-radius: 8px;
        min-height: 42px;
    }

    .produto-panel textarea.form-control {
        min-height: 110px;
    }

    .btn-cadastrar-produto {
        min-height: 42px;
        font-weight: 700;
        border-radius: 8px;
    }
</style>
@endpush

@section('content')
<main class="produto-page py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <section class="card produto-panel">
                    <div class="produto-header">
                        <h1>Cadastro de Produto</h1>
                        <p>Cadastre pecas, acessorios e produtos para a loja de motos.</p>
                    </div>

                    <form id="form-cadastro-produto" method="POST" action="{{ route('cadastro-produto.store') }}" novalidate>
                        @csrf

                        <div class="card-body p-3 p-md-4">
                            <div id="mensagem-produto"></div>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    Confira os campos e tente novamente.
                                </div>
                            @endif

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="nome_produto" class="form-label">Nome do Produto</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nome') is-invalid @enderror"
                                        id="nome_produto"
                                        name="nome"
                                        value="{{ old('nome') }}"
                                        placeholder="Ex: Capacete Pro Tork"
                                        required
                                    >
                                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="descricao_produto" class="form-label">Descricao do Produto</label>
                                    <textarea
                                        class="form-control @error('descricao') is-invalid @enderror"
                                        id="descricao_produto"
                                        name="descricao"
                                        placeholder="Digite os detalhes do produto"
                                    >{{ old('descricao') }}</textarea>
                                    @error('descricao') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="preco_produto" class="form-label">Preco do Produto</label>
                                    <input
                                        type="number"
                                        step="0.01"
                                        min="0"
                                        class="form-control @error('preco') is-invalid @enderror"
                                        id="preco_produto"
                                        name="preco"
                                        value="{{ old('preco') }}"
                                        placeholder="0.00"
                                        required
                                    >
                                    @error('preco') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="quantidade_produto" class="form-label">Quantidade em Estoque</label>
                                    <input
                                        type="number"
                                        min="0"
                                        class="form-control @error('quantidade') is-invalid @enderror"
                                        id="estoque_produto"
                                        name="quantidade"
                                        value="{{ old('quantidade') }}"
                                        placeholder="0"
                                        required
                                    >
                                    @error('quantidade') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="tipo_produto" class="form-label">Tipo do Produto</label>
                                    <input
                                        type="text"
                                        class="form-control @error('categoria') is-invalid @enderror"
                                        id="tipo_produto"
                                        name="categoria"
                                        value="{{ old('categoria') }}"
                                        placeholder="Ex: Acessorio, Peca, Eletronico"
                                    >
                                    @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="data_validade" class="form-label">Data de Validade</label>
                                    <input
                                        type="date"
                                        class="form-control @error('data_validade') is-invalid @enderror"
                                        id="data_validade"
                                        name="data_validade"
                                        value="{{ old('data_validade') }}"
                                    >
                                    @error('data_validade') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white p-3 p-md-4">
                            <div class="d-grid d-sm-flex justify-content-sm-end">
                                <button type="button" id="btn_cadastrar_produto" class="btn btn-success btn-cadastrar-produto px-4">
                                    Cadastrar Produto
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script src="{{ asset('cadastro_produto.js') }}"></script>
@endpush
