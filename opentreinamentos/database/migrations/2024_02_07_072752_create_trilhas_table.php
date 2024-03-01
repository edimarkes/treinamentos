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
        Schema::create('trilhas', function (Blueprint $table) {
            $table->id();
            $table->string('nometrilha');
            $table->string('curso1')->nullable();
            $table->string('curso2')->nullable();
            $table->string('curso3')->nullable();
            $table->string('curso4')->nullable();
            $table->string('curso5')->nullable();
            $table->decimal('valor',8,2);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trilhas');
    }
};
