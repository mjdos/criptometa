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
        Schema::create('submetas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('projeto_id');
            $table->foreign('projeto_id')
                ->references('id')
                ->on('projetos')
                ->onDelete('cascade');
            $table->string('nome');
            $table->decimal('percentual', 5, 2); // Percentual da submeta
            $table->decimal('valor', 15, 2); // Valor da submeta
            $table->decimal('fundos_arrecadados', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submetas');
    }
};
