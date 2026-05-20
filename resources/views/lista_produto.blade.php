@extends('layouts.principal')
@section('title', 'Lista de Produtos - Relampago Marquinhos')
@section('content')
<div class="container">
    <h1 class="text-center mb-4">Lista de Produtos</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col">Preco</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Categoria</th>
                <th scope="col">Data de Validade</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id }}</th>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>{{ $produto->data_validade ? \Carbon\Carbon::parse($produto->data_validade)->format('d/m/Y') : '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Nenhum produto cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
