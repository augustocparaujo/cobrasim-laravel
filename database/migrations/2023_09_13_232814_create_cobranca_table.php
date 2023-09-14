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
        Schema::create('cobranca', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('cliente_id')->nullable();
            $table->string('id_cobranca')->nullable();
            $table->string('custom_id')->nullable();
            $table->longText('link')->nullable();
            $table->string('codigobarra')->nullable();
            $table->string('codigodigitavel')->nullable();
            $table->longText('pixqrcode')->nullable();
            $table->longText('descricao')->nullable();
            $table->integer('parcela')->nullable();	
            $table->decimal('valor')->nullable();
            $table->date('vencimento')->nullable();
            $table->decimal('valor_recebido')->nullable();	
            $table->date('datapagamento')->nullable();
            $table->string('situacao')->nullable();	
            $table->longText('obs')->nullable();	
            $table->integer('quantidade')->nullable();	
            $table->string('tipo')->nullable();
            $table->integer('estoque')->nullable();	
            $table->string('produto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobranca');
    }
};
