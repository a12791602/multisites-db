<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendPopularChessCardsListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_popular_chess_cards_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('chess_card_id')->nullable();
			$table->string('name', 45)->nullable();
			$table->string('icon', 128)->nullable();
			$table->integer('sort')->nullable();
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
		Schema::drop('frontend_popular_chess_cards_lists');
	}

}
