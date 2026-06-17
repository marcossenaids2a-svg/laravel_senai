@extends('layouts.principal')
@section('title', 'Sobre - Relampago Marquinhos')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../alterar_produto.js"></script>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #214aab, #59abfe55);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            color: white;
            padding: 40px 20px;
        }

        .product-register-header {
            max-width: 1000px;
            margin: 0 auto 40px;
            text-align: center;
        }

        .product-register-kicker {
            color: #38bdf8;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .product-register-header h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .product-register-subtitle {
            color: #ffffff;
            max-width: 600px;
            margin: auto;
        }

        .product-register-grid {
            max-width: 1000px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(60, 39, 255, 0.3);
        }

        .product-field--full {
            grid-column: 1 / -1;
        }

        .product-field label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #e2e8f0;
        }

        .form-control {
            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .15);
            color: white;
            border-radius: 12px;
            padding: 12px 15px;
            transition: .3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, .15);
            border-color: #38bdf8;
            box-shadow: 0 0 15px rgba(56, 189, 248, .4);
            color: white;
        }

        .form-control::placeholder {
            color: #000000;
        }

        textarea.form-control {
            resize: none;
        }

        .product-register-actions {
            max-width: 1000px;
            margin: 30px auto 0;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        #btn_alterar {
            background: linear-gradient(135deg, #f59e0b, #f97316);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: 600;
            transition: .3s;
        }

        #btn_alterar:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(249, 115, 22, .4);
        }

        .product-btn-secondary {
            border: 2px solid rgba(226, 33, 33, 0.2);
            color: white;
            padding: 12px 30px;
            border-radius: 12px;
            text-decoration: none;
            transition: .3s;
        }

        .product-btn-secondary {
    background: linear-gradient(135deg, #dc2626, #ff0101);
    border: 2px solid rgba(220, 38, 38, 0.2);
    color: white;
    padding: 12px 30px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    transition: .3s;
}

.product-btn-secondary:hover {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

        @media (max-width: 768px) {
            .product-register-grid {
                padding: 20px;
            }

            .product-register-actions {
                flex-direction: column;
            }

            .product-register-actions .btn,
            .product-register-actions a {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <header class="product-register-header">
        <p class="product-register-kicker">Área Administrativa</p>
        <h3>Visualizar Produto</h3>
<input type="hidden" id="id_produto" name="id_produto" value="{{ $produto->id }}">
                <p class="product-register-subtitle">
            Consulte as informações do produto cadastrado no estoque da Relampago Marquinhos.
        </p>
    </header>

    <div class="product-register-grid">

        <div class="product-field product-field--full">
            <label for="nome_produto">Nome do Produto</label>
            <input type="text" class="form-control form-control-lg"
                value="{{ $produto->nome }}"
                id="nome_produto"
                name="nome_produto">
        </div>

        <div class="product-field product-field--full">
            <label for="descricao_produto">Descrição do Produto</label>
            <textarea class="form-control"
                id="descricao_produto"
                name="descricao_produto"
                rows="4">{{ $produto->descricao }}</textarea>
        </div>

        <div class="product-field">
            <label for="preco_produto">Preço do Produto (R$)</label>
            <input type="text"
                class="form-control"
                id="preco_produto"
                name="preco_produto"
                value="{{ $produto->preco }}">
        </div>

        <div class="product-field">
            <label for="estoque_produto">Quantidade em Estoque</label>
            <input type="text"
                class="form-control"
                id="estoque_produto"
                name="quantidade_produto"
                value="{{ $produto->quantidade }}">
        </div>

        <div class="product-field">
            <label for="tipo_produto">Tipo do Produto</label>
            <input type="text"
                class="form-control"
                id="tipo_produto"
                name="tipo_produto"
                value="{{ $produto->categoria }}">
        </div>

    </div>

    <div class="product-register-actions">
        <button class="btn" id="btn_alterar" type="button">
            ✏️ Alterar Produto
        </button>

        <button class="btn btn-danger btn-sm ms 2" id="btn_excluir" type="button">
            🗑️ Excluir Produto
        </button>
    </div>

</body>


</html>