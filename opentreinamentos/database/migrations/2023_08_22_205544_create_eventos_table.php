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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nomecurso',100);
            $table->string('local',100);
            $table->decimal('valorevento',8,2);
            $table->string('cargahoraria');
            $table->string('periodo',100);                    
            $table->date('datainicial');
            $table->date('datafinal');
            $table->time('horainicial');
            $table->time('horafinal');
            $table->string('diassemana')->nullable();
            $table->string('formato',20);
            $table->string('site',20);
            $table->text('descricao');
            $table->json('itensevento')->nullable();           
            $table->string('imagemevento');          
            
            $table->foreignId('user_id')->contrained()->onDelete('cascade')->nullable();
            
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
