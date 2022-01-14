<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces_match', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_matches');
                $table->foreign('id_matches')->references('id')->on('matches');
                $table->string('pos_axis_x_match');
                $table->string('pos_axis_y_match');
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
        Schema::dropIfExists('pieces_match');
    }
}
