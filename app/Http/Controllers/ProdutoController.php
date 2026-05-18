<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('cadastro_produto');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
            'data_validade' => 'nullable|date',
            'categoria' => 'nullable|string|max:255',
        ]);

        Produto::create($dados);

        return redirect()
            ->route('cadastro-produto')
            ->with('success', 'Produto cadastrado com sucesso!');
    }
}
