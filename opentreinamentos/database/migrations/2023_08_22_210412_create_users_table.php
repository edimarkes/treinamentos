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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('nivelusuario');            
            $table->string('nome');
            $table->string('email')->unique();        
            
            $table->string('telefone');
            $table->string('rg');
            $table->string('cpf')->unique();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();            
            $table->string('password');
            $table->string('imagemusuario')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('user_id')->nullable(); 
            $table->rememberToken();           
            $table->timestamps();            

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
