<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(Request $request)
    {
        return view('produtos.login');
    }

    public function esqueciSenha(Request $request)
    {
        return view('EsqueciSenha');
    }

    public function cadastroForm()
    {
        return view('Cadastro');
    }

    public function cadastro(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'senha' => 'required|string|min:6',
        ]);

        return redirect()->route('cadastro')->with('success', 'Cadastro enviado com sucesso!');
    }

    public function motos(Request $request)
    {
        return view('Motos');
    }

    public function ofertas(Request $request)
    {
        return view('Ofertas');
    }

    public function servicos(Request $request)
    {
        return view('Servicos');
    }

    public function contato(Request $request)
    {
        return view('Contato');
    }

    public function loginSubmit(Request $request)
    {
        // Handle login
        $data = $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string',
        ]);

        return redirect()->route('login')->with('success', 'Login realizado com sucesso!');
    }

    public function esqueciSenhaSubmit(Request $request)
    {
        // Handle forgot password
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        return redirect()->route('esqueci-senha')->with('success', 'Email enviado com sucesso!');
    }

    public function contatoSubmit(Request $request)
    {
        // Handle contact
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
        ]);

        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
    }

    public function sobre()
    {
        return view('Sobre');
    }
}
