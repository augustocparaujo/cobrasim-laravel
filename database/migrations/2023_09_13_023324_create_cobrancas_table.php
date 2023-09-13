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
        Schema::create('cobrancas', function (Blueprint $table) {
            $table->id();
            $table->string('idcobranca')->nullable();
            $table->longText('link')->nullable();
            $table->string('codigobarra')->nullable();
            $table->string('codigodigitavel')->nullable();
            $table->string('custom_id')->nullable();
            $table->longText('descricao')->nullable();
            $table->int('parcela',2)->nullable();	
            $table->decimal('valor',10,2)->nullable();
            $table->date('vencimento')->nullable();
            $table->decimal('valor_recebido',10,2)->nullable();	
            $table->date('datapagamento')->nullable();
            $table->string('situacao')->nullable();	
            $table->longText('pixqrcode')->nullable();
            $table->longText('obs')->nullable();	
            $table->int('quantidade')->nullable();	
            $table->string('tipo')->nullable();
            $table->int('estoque')->nullable();	
            $table->string('produto')->nullable();	        
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobrancas');
    }
};
