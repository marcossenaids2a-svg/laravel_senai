@extends('layouts.principal')

@section('title', 'Lista de Produtos')

@push('styles')
<style>
    body {
        background: #f8fafc;
    }

    .lista-produto-page {
        padding: 32px 0;
    }

    .lista-produto-header h1 {
        font-weight: 800;
        color: #0f172a;
        margin: 0;
    }

    .lista-produto-header p {
        margin: 6px 0 0;
        color: #475569;
    }

    .lista-card {
        border: 0;
        border-radius: 14px;
        box-shadow: 0 14px 28px rgba(15, 23, 42, 0.08);
    }

    .table thead th {
        background: #0f172a;
        color: #fff;
        font-weight: 700;
        border-color: #0f172a;
        white-space: nowrap;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }
</style>
@endpush

@section('content')
<main class="lista-produto-page">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4 lista-produto-header">
            <div>
                <h1>Lista de Produtos</h1>
                <p>Produtos cadastrados e salvos no banco de dados.</p>
            </div>
            <a href="{{ route('cadastro-produto') }}" class="btn btn-success">Novo produto</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        <div class="card lista-card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Preco</th>
                                <th>Qtd</th>
                                <th>Categoria</th>
                                <th>Validade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->id }}</td>
                                    <td class="fw-semibold">{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao ?: '-' }}</td>
                                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                    <td>{{ $produto->categoria ?: '-' }}</td>
                                    <td>{{ $produto->data_validade ? \Carbon\Carbon::parse($produto->data_validade)->format('d/m/Y') : '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">Nenhum produto cadastrado ainda.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
