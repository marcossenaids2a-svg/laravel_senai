<?php

namespace App\Http\Controllers;

use App\Models\MotoCheckout;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produtos.cadastro');
    }

    public function cadastro2(Request $request)
    {
        $motoSelecionada = $request->query('moto');
        $precoSelecionado = $request->query('preco');

        return view('cadastro_produto2.CADASTRO', compact('motoSelecionada', 'precoSelecionado'));
    }

    public function storeCheckout(Request $request)
    {
        $dados = $request->validate([
            'moto_nome' => 'required|string|max:255',
            'moto_preco' => 'nullable|numeric|min:0',
            'nome_completo' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:30',
            'tipo_documento' => 'required|in:cpf,cnpj',
            'documento' => 'required|string|max:18',
            'precisa_entrega' => 'nullable|boolean',
            'cep' => ['required_if:precisa_entrega,1', 'nullable', 'regex:/^\d{5}-?\d{3}$/'],
            'endereco' => 'required_if:precisa_entrega,1|nullable|string|max:255',
            'numero' => 'required_if:precisa_entrega,1|nullable|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required_if:precisa_entrega,1|nullable|string|max:255',
            'cidade' => 'required_if:precisa_entrega,1|nullable|string|max:255',
            'estado' => 'required_if:precisa_entrega,1|nullable|string|size:2',
        ], [
            'cep.required_if' => 'Informe o CEP para entrega.',
            'cep.regex' => 'Informe um CEP valido no formato 00000-000.',
            'endereco.required_if' => 'Informe o endereco para entrega.',
            'numero.required_if' => 'Informe o numero do endereco.',
            'bairro.required_if' => 'Informe o bairro para entrega.',
            'cidade.required_if' => 'Informe a cidade para entrega.',
            'estado.required_if' => 'Informe o estado para entrega.',
        ]);

        $dados['precisa_entrega'] = $request->boolean('precisa_entrega');
        $dados['tipo_documento'] = strtolower($dados['tipo_documento']);
        $dados['documento'] = preg_replace('/\D/', '', $dados['documento']);
        $dados['telefone'] = preg_replace('/\D/', '', $dados['telefone']);

        if (!empty($dados['cep'])) {
            $dados['cep'] = preg_replace('/\D/', '', $dados['cep']);
        }

        if (!empty($dados['estado'])) {
            $dados['estado'] = strtoupper($dados['estado']);
        }

        if ($dados['tipo_documento'] === 'cpf' && strlen($dados['documento']) !== 11) {
            return redirect()->back()->withErrors([
                'documento' => 'CPF deve conter 11 numeros.',
            ])->withInput();
        }

        if ($dados['tipo_documento'] === 'cnpj' && strlen($dados['documento']) !== 14) {
            return redirect()->back()->withErrors([
                'documento' => 'CNPJ deve conter 14 numeros.',
            ])->withInput();
        }

        if (!$dados['precisa_entrega']) {
            $dados['cep'] = null;
            $dados['endereco'] = null;
            $dados['numero'] = null;
            $dados['complemento'] = null;
            $dados['bairro'] = null;
            $dados['cidade'] = null;
            $dados['estado'] = null;
        }

        MotoCheckout::create($dados);

        return redirect()
            ->route('cadastro-2')
            ->with('success', 'Checkout da moto salvo com sucesso no banco.');
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
                'redirect' => route('listar-produto'),
            ]);
        }

        return redirect()
            ->route('listar-produto')
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    public function lista_produto(Request $request)
    {
        $produtos = Produto::orderByDesc('id')->get();

        return view('lista_produto',)->with('produtos', $produtos);
    }

    public function visualiza_produto($id)
    {
        $produto = Produto::find($id);
        return view('visualiza_produto')->with('produto', $produto);

    }
    public function alterar_produto(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required',
            'descricao_produto' => 'nullable',
            'preco_produto' => 'required|numeric',
            'quantidade_produto' => 'required',
            'tipo_produto' => 'required',
            'produto_id' => 'required|integer',
        ]);

        try {
            $produto = Produto::find($request->produto_id);

            if ($produto) {
                $produto->update([
                    'nome' => $request->nome_produto,
                    'descricao' => $request->descricao_produto,
                    'preco' => $request->preco_produto,
                    'quantidade' => $request->quantidade_produto,
                    'categoria' => $request->tipo_produto,
                ]);

                return response()->json([
                    'erro' => 'n',
                    'msg' => 'Produto alterado com sucesso!'
                ], 200);
            }

            return response()->json([
                'erro' => 's',
                'msg' => 'Produto não encontrado.'
            ], 404);
        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Erro ao alterar produto: ' . $th->getMessage()
            ], 500);
        }
    }
    public function excluir_produto(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|integer',
        ]);

        try {
            $produto = Produto::find($request->produto_id);

            if ($produto) {
                $produto->delete();

                return response()->json([
                    'erro' => 'n',
                    'msg' => 'Produto excluído com sucesso!'
                ], 200);
            }

            return response()->json([
                'erro' => 's',
                'msg' => 'Produto não encontrado.'
            ], 404);
        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg' => 'Erro ao excluir produto: ' . $th->getMessage()
            ], 500);
        }
    }
}
