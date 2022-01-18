<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_player_1');
            $table->foreign('id_player_1')->references('id')->on('users');
            $table->unsignedBigInteger('id_player_2');
            $table->foreign('id_player_2')->references('id')->on('users');
            $table->unsignedBigInteger('id_game');
            $table->foreign('id_game')->references('id')->on('games');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
