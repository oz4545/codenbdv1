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
        Schema::create('score', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('usuario_id'); // Clave foránea que referencia al usuario
        $table->integer('puntaje');
        $table->timestamps();

        $table->foreign('usuario_id')->references('id')->on('user');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score');
    }
};
