<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('cadastro_produto2.CADASTRO');
    }

    public function cadastro2()
    {
        return view('cadastro_produto2.CADASTRO');
    }

    public function store(Request $request)
    {
        $request->merge([
            'nome' => $request->input('nome', $request->input('nome_produto')),
            'descricao' => $request->input('descricao', $request->input('descricao_produto')),
            'preco' => $request->input('preco', $request->input('preco_produto')),
            'quantidade' => $request->input('quantidade', $request->input('quantidade_produto')),
            'categoria' => $request->input('categoria', $request->input('tipo_produto')),
        ]);

        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
            'data_validade' => 'nullable|date',
            'categoria' => 'nullable|string|max:255',
        ]);

        Produto::create($dados);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'erro' => 'n',
                'message' => 'Produto cadastrado com sucesso!',
            ]);
        }

        return redirect()
            ->back()
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    public function lista_produto(Request $request)
    {
        $produtos = Produto::orderByDesc('id')->get();

        return view('lista_produto', compact('produtos'));
    }
}
