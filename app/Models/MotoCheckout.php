<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotoCheckout extends Model
{
    protected $table = 'moto_checkouts';

    protected $fillable = [
        'moto_nome',
        'moto_preco',
        'nome_completo',
        'email',
        'telefone',
        'tipo_documento',
        'documento',
        'precisa_entrega',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
    ];

    protected $casts = [
        'precisa_entrega' => 'boolean',
    ];
}
