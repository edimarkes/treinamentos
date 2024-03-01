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
        Schema::create('programadors', function (Blueprint $table) {
            $table->id();
            $table->String('nome',100);
            $table->String('cep',10);
            $table->String('logradouro',100);
            $table->String('cidade',100);
            $table->String('numero',100); 
            $table->String('bairro',100);
            $table->String('complemento',100)->nullable();
            $table->String('estado',2);
            $table->String('rg');
            $table->String('cpf',15);
            $table->String('email',200);
            $table->String('fone',15);
            $table->String('escolaridade',100);
            $table->String('datanascimento',100);
            $table->String('experiencia',50)->nullable();           
            $table->String('pj',3)->nullable();
            $table->String('freelance',3)->nullable();
            $table->String('profissional',50)->nullable();
            $table->json('conhecimento')->nullable();           
            $table->String('curriculo',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programadors');
    }
};
