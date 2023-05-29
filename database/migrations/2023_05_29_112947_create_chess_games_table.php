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
        Schema::create('chess_games', function (Blueprint $table) {
            $table->unsignedMediumInteger('id');
            $table->string('Event', 64)->nullable();
            $table->string('Site', 64)->nullable();
            $table->string('Date', 16)->nullable();
            $table->string('Round', 8)->nullable();
            $table->string('White', 32)->nullable();
            $table->string('Black', 32)->nullable();
            $table->string('WhiteTitle', 8)->nullable();
            $table->string('BlackTitle', 8)->nullable();
            $table->string('WhiteElo', 8)->nullable();
            $table->string('BlackElo', 8)->nullable();
            $table->string('ECO', 3)->nullable();
            $table->string('NIC', 8)->nullable();
            $table->string('Opening', 64)->nullable();
            $table->string('Variation', 64)->nullable();
            $table->string('SubVariation', 64)->nullable();
            $table->string('WhiteTeam', 64)->nullable();
            $table->string('BlackTeam', 64)->nullable();
            $table->string('Annotator', 16)->nullable();
            $table->string('PlyCount', 16)->nullable();
            $table->string('SetUp', 64)->nullable();
            $table->string('FEN', 64)->nullable();
            $table->string('TimeControl', 8)->nullable();
            $table->string('movetext', 3072)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chess_games');
    }
};
