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
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('produto_id')->unsigned()->nullable(false);
            $table->string('tipo')->nullable(false);
            $table->string('quantidade')->nullable(false);
            $table->date('data_movimentacao')->nullable(false);
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacoes');
    }
};
