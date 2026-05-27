@extends('layouts.teste2')

@section('title', 'Checkout de Moto')

@push('styles')
<style>
    body {
        background: #f4f6f9;
    }

    .checkout-page {
        min-height: calc(100vh - 56px);
        display: flex;
        align-items: center;
    }

    .checkout-panel {
        border: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 16px 42px rgba(15, 23, 42, .12);
    }

    .checkout-header {
        background: #111827;
        color: #fff;
        padding: 24px;
    }

    .checkout-header h1 {
        font-size: clamp(1.5rem, 4vw, 2rem);
        font-weight: 800;
        margin: 0;
    }

    .checkout-header p {
        color: #d1d5db;
        margin: 6px 0 0;
    }

    .checkout-panel .form-label {
        font-weight: 700;
        color: #1f2937;
    }

    .checkout-panel .form-control,
    .checkout-panel .form-select {
        border-radius: 8px;
        min-height: 42px;
    }

    .btn-checkout {
        min-height: 42px;
        font-weight: 700;
        border-radius: 8px;
    }
</style>
@endpush

@section('content')
@php($precisaEntrega = old('precisa_entrega', '1'))
<main class="checkout-page py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <section class="card checkout-panel">
                    <div class="checkout-header">
                        <h1>Checkout de Moto</h1>
                        <p>Preencha os dados para finalizar a compra da moto.</p>
                    </div>

                    <form method="POST" action="{{ route('cadastro-2.store') }}" novalidate>
                        @csrf

                        <div class="card-body p-3 p-md-4">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Confira os campos abaixo:</strong>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $erro)
                                            <li>{{ $erro }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row g-3">
                                <div class="col-12 col-md-8">
                                    <label for="moto_nome" class="form-label">Moto escolhida</label>
                                    <input
                                        type="text"
                                        class="form-control @error('moto_nome') is-invalid @enderror"
                                        id="moto_nome"
                                        name="moto_nome"
                                        value="{{ old('moto_nome', $motoSelecionada ?? '') }}"
                                        placeholder="Ex: Honda CG 160"
                                        required
                                    >
                                    @error('moto_nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="moto_preco" class="form-label">Preco da Moto (R$)</label>
                                    <input
                                        type="number"
                                        step="0.01"
                                        min="0"
                                        class="form-control @error('moto_preco') is-invalid @enderror"
                                        id="moto_preco"
                                        name="moto_preco"
                                        value="{{ old('moto_preco', $precoSelecionado ?? '') }}"
                                        placeholder="0.00"
                                    >
                                    @error('moto_preco') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="nome_completo" class="form-label">Nome completo</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nome_completo') is-invalid @enderror"
                                        id="nome_completo"
                                        name="nome_completo"
                                        value="{{ old('nome_completo') }}"
                                        placeholder="Digite seu nome completo"
                                        required
                                    >
                                    @error('nome_completo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="voce@email.com"
                                        required
                                    >
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="telefone" class="form-label">Telefone de contato</label>
                                    <input
                                        type="text"
                                        class="form-control @error('telefone') is-invalid @enderror"
                                        id="telefone"
                                        name="telefone"
                                        value="{{ old('telefone') }}"
                                        placeholder="(11) 99999-9999"
                                        required
                                    >
                                    @error('telefone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="tipo_documento" class="form-label">Tipo de documento</label>
                                    <select
                                        class="form-select @error('tipo_documento') is-invalid @enderror"
                                        id="tipo_documento"
                                        name="tipo_documento"
                                        required
                                    >
                                        <option value="cpf" {{ old('tipo_documento', 'cpf') === 'cpf' ? 'selected' : '' }}>CPF</option>
                                        <option value="cnpj" {{ old('tipo_documento') === 'cnpj' ? 'selected' : '' }}>CNPJ</option>
                                    </select>
                                    @error('tipo_documento') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-8">
                                    <label for="documento" class="form-label">Documento (CPF/CNPJ)</label>
                                    <input
                                        type="text"
                                        class="form-control @error('documento') is-invalid @enderror"
                                        id="documento"
                                        name="documento"
                                        value="{{ old('documento') }}"
                                        placeholder="Digite apenas numeros ou com mascara"
                                        required
                                    >
                                    @error('documento') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check mt-2">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="1"
                                            id="precisa_entrega"
                                            name="precisa_entrega"
                                            {{ $precisaEntrega ? 'checked' : '' }}
                                        >
                                        <label class="form-check-label" for="precisa_entrega">
                                            Preciso de entrega no endereco informado
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <h2 class="h5 mb-3">Dados de Entrega</h2>

                            <div class="row g-3" id="bloco-entrega">
                                <div class="col-12 col-md-4">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input
                                        type="text"
                                        class="form-control @error('cep') is-invalid @enderror"
                                        id="cep"
                                        name="cep"
                                        value="{{ old('cep') }}"
                                        placeholder="00000-000"
                                        data-required-entrega="1"
                                    >
                                    @error('cep') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-8">
                                    <label for="endereco" class="form-label">Endereco completo</label>
                                    <input
                                        type="text"
                                        class="form-control @error('endereco') is-invalid @enderror"
                                        id="endereco"
                                        name="endereco"
                                        value="{{ old('endereco') }}"
                                        placeholder="Rua, Avenida, etc."
                                        data-required-entrega="1"
                                    >
                                    @error('endereco') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-3">
                                    <label for="numero" class="form-label">Numero</label>
                                    <input
                                        type="text"
                                        class="form-control @error('numero') is-invalid @enderror"
                                        id="numero"
                                        name="numero"
                                        value="{{ old('numero') }}"
                                        placeholder="123"
                                        data-required-entrega="1"
                                    >
                                    @error('numero') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-5">
                                    <label for="complemento" class="form-label">Complemento</label>
                                    <input
                                        type="text"
                                        class="form-control @error('complemento') is-invalid @enderror"
                                        id="complemento"
                                        name="complemento"
                                        value="{{ old('complemento') }}"
                                        placeholder="Apto, bloco, referencia (opcional)"
                                    >
                                    @error('complemento') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label for="bairro" class="form-label">Bairro</label>
                                    <input
                                        type="text"
                                        class="form-control @error('bairro') is-invalid @enderror"
                                        id="bairro"
                                        name="bairro"
                                        value="{{ old('bairro') }}"
                                        data-required-entrega="1"
                                    >
                                    @error('bairro') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="cidade" class="form-label">Cidade</label>
                                    <input
                                        type="text"
                                        class="form-control @error('cidade') is-invalid @enderror"
                                        id="cidade"
                                        name="cidade"
                                        value="{{ old('cidade') }}"
                                        data-required-entrega="1"
                                    >
                                    @error('cidade') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-2">
                                    <label for="estado" class="form-label">UF</label>
                                    <input
                                        type="text"
                                        class="form-control @error('estado') is-invalid @enderror"
                                        id="estado"
                                        name="estado"
                                        value="{{ old('estado') }}"
                                        placeholder="SP"
                                        maxlength="2"
                                        data-required-entrega="1"
                                    >
                                    @error('estado') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-white p-3 p-md-4">
                            <div class="d-grid d-sm-flex justify-content-sm-end">
                                <button type="submit" class="btn btn-success btn-checkout px-4">
                                    Finalizar Checkout
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
<script>
document.addEventListener("DOMContentLoaded", function () {
    const checkboxEntrega = document.getElementById("precisa_entrega");
    const blocoEntrega = document.getElementById("bloco-entrega");
    const camposEntrega = blocoEntrega.querySelectorAll("[data-required-entrega='1']");

    function atualizarCamposEntrega() {
        const precisaEntrega = checkboxEntrega.checked;

        blocoEntrega.style.display = precisaEntrega ? "" : "none";

        camposEntrega.forEach(function (campo) {
            campo.required = precisaEntrega;
        });
    }

    checkboxEntrega.addEventListener("change", atualizarCamposEntrega);
    atualizarCamposEntrega();
});
</script>
@endpush
