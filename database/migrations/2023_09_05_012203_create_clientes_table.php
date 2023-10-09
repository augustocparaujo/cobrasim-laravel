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
            $table->string('idmikweb', 20)->default('0');
            $table->string('situacao', 20)->default('ativo');
            $table->string('formacobranca', 20)->default('boleto');
            $table->string('vencimento', 2)->default('00');
            $table->string('nome', 100);
            $table->string('cpf', 14)->nullable();
            $table->string('rg', 20)->default('');
            $table->string('nascimento', 10)->nullable();
            $table->string('contato', 20);
            $table->string('contato2', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('rua', 255)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->text('obs')->nullable();
            $table->string('usuariocad')->nullable();
            $table->date('ativacao')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
