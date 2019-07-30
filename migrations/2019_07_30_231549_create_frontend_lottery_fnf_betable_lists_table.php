<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendLotteryFnfBetableListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_lottery_fnf_betable_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lotteries_id', 16)->nullable()->comment('彩种标识');
			$table->integer('method_id')->nullable()->comment('玩法id (frontend_lottery_fnf_betable_methods表id)');
			$table->integer('sort')->nullable()->comment('排序');
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
		Schema::drop('frontend_lottery_fnf_betable_lists');
	}

}
