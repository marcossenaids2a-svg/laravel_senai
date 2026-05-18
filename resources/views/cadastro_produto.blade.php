@extends('layouts.principal')
@section('title', 'Cadastro de Produto')

@section('content')
<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3 mb-4">Cadastro de Produto</h1>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            Confira os campos e tente novamente.
                        </div>
                    @endif

                    <form action="{{ route('cadastro-produto.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input
                                type="text"
                                class="form-control @error('nome') is-invalid @enderror"
                                id="nome"
                                name="nome"
                                value="{{ old('nome') }}"
                                required
                            >
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descricao</label>
                            <textarea
                                class="form-control @error('descricao') is-invalid @enderror"
                                id="descricao"
                                name="descricao"
                                rows="3"
                            >{{ old('descricao') }}</textarea>
                            @error('descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="preco" class="form-label">Preco</label>
                                <input
                                    type="number"
                                    step="0.01"
                                    min="0"
                                    class="form-control @error('preco') is-invalid @enderror"
                                    id="preco"
                                    name="preco"
                                    value="{{ old('preco') }}"
                                    required
                                >
                                @error('preco')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input
                                    type="number"
                                    min="0"
                                    class="form-control @error('quantidade') is-invalid @enderror"
                                    id="quantidade"
                                    name="quantidade"
                                    value="{{ old('quantidade') }}"
                                    required
                                >
                                @error('quantidade')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="data_validade" class="form-label">Data de validade</label>
                                <input
                                    type="date"
                                    class="form-control @error('data_validade') is-invalid @enderror"
                                    id="data_validade"
                                    name="data_validade"
                                    value="{{ old('data_validade') }}"
                                >
                                @error('data_validade')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="categoria" class="form-label">Categoria</label>
                                <input
                                    type="text"
                                    class="form-control @error('categoria') is-invalid @enderror"
                                    id="categoria"
                                    name="categoria"
                                    value="{{ old('categoria') }}"
                                >
                                @error('categoria')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger">Salvar produto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
