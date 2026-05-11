<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function login()
    {
        return view('produtos.login');
    }

    public function esqueciSenha()
    {
        return view('EsqueciSenha');
    }

    public function cadastro()
    {
        return view('Cadastro');
    }

    public function motos()
    {
        return view('Motos');
    }

    public function ofertas()
    {
        return view('Ofertas');
    }

    public function servicos()
    {
        return view('Servicos');
    }

    public function contato()
    {
        return view('Contato');
    }

    public function sobre()
    {
        return view('Sobre');
    }
}
