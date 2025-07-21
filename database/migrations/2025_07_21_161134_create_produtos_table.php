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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('preco', 10, 2);
            $table->enum('tipo', ['peixe', 'acessorio']);
            $table->string('cor')->nullable(); // Apenas para peixes
            $table->enum('tamanho', ['pequeno', 'medio', 'grande'])->nullable(); // Apenas para peixes
            $table->string('categoria_acessorio')->nullable(); // Apenas para acessórios
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
