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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_cidade');
            $table->date('data_entrega');
            $table->decimal('valor_frete', 10, 2);
            $table->timestamps();
            $table->integer('ativo')->default(1);
            
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};