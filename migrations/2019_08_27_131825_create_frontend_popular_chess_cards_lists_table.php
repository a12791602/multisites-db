<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendPopularChessCardsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_popular_chess_cards_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chess_card_id')->nullable();
            $table->string('name',45)->nullable();
            $table->string('icon',128)->nullable();
            $table->integer('sort')->nullable();
            $table->nullableTimestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_popular_chess_cards_lists');
    }
}
