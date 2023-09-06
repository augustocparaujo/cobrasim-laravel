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
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            /** falta criar o ligação do cliente com iduser que a empresa  hasmany(muitos pra um) */
            $table->string('idmikweb',20)->default('0');
            $table->string('situacao', 20)->default('ativo');
            $table->string('formacobranca', 20)->default('');
            $table->string('vencimento', 2)->default('');
            $table->string('nome', 100);
            $table->string('cpf', 14)->default('');
            $table->string('rg', 20)->default('');
            $table->string('nascimento',10)->default('0000-00-00');
            $table->string('contato', 11);
            $table->string('contato2', 11)->default('');
            $table->string('email', 100);
            $table->string('cep', 8)->default('');
            $table->string('rua', 100)->default('');
            $table->string('bairro', 50)->default('');
            $table->string('municipio', 50)->default('');
            $table->string('estado', 2)->default('');
            $table->string('complemento', 100)->default('');
            $table->text('obs')->default('');
            $table->string('usuariocad')->default('');
            $table->string('ativacao',10)->default('0000-00-00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
