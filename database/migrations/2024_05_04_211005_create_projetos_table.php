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
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('meta_1');
            $table->string('meta_2');
            $table->string('meta_3');
            $table->string('meta_4');
            $table->string('meta_5');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
