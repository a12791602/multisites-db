<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendLotteryRedirectBetListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_lottery_redirect_bet_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lotteries_id')->nullable()->comment('彩票id （lottery_lists表id）');
			$table->string('lotteries_sign', 16)->nullable()->comment('彩种标识');
			$table->string('pic_path', 128)->nullable()->comment('图片');
			$table->integer('sort')->unsigned()->nullable()->comment('排序');
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
		Schema::drop('frontend_lottery_redirect_bet_lists');
	}

}
