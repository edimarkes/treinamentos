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
        Schema::create('checkins', function (Blueprint $table) {
            $table->id();
            $table->string('nomealuno',100)->nullable();
            $table->string('nomecurso',100);
            $table->date('datainicial')->nullable();
            $table->date('datafinal')->nullable();
            $table->time('horainicial')->nullable();
            $table->time('horafinal')->nullable();
            $table->string('periodo',100); 
            $table->string('formato',20); 
            $table->decimal('valorevento',8,2);
            $table->string('cargahoraria',4);
            $table->string('status');
            $table->foreignId('evento_id')->contrained()->onDelete('cascade')->nullable();
            $table->foreignId('user_id')->contrained()->onDelete('cascade')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkins');
    }
};
