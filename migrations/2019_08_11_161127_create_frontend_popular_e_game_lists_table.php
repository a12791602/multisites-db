<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendPopularEGameListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_popular_e_game_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('computer_game_id')->nullable();
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
		Schema::drop('frontend_popular_e_game_lists');
	}

}
