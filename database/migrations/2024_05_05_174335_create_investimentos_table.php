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
        Schema::create('investimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investidor_id')->unsigned();
            $table->foreign('investidor_id')
                ->references('id')
                ->on('users');
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')
                ->references('id')
                ->on('projetos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investimentos');
    }
};
