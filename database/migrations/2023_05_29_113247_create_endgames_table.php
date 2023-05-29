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
        Schema::create('endgames', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->nullable();
            $table->string('Result', 8)->nullable();
            $table->string('FEN', 64)->nullable();
            $table->string('movetext', 3072)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endgames');
    }
};
