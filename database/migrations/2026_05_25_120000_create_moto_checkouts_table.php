<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moto_checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('moto_nome');
            $table->decimal('moto_preco', 10, 2)->nullable();
            $table->string('nome_completo');
            $table->string('email');
            $table->string('telefone', 30);
            $table->string('tipo_documento', 4);
            $table->string('documento', 18);
            $table->boolean('precisa_entrega')->default(true);
            $table->string('cep', 9)->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moto_checkouts');
    }
};
