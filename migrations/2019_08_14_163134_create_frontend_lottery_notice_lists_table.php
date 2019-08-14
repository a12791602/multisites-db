<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendLotteryNoticeListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_lottery_notice_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lotteries_id', 16)->nullable()->comment('彩种标识');
			$table->string('cn_name', 32)->nullable()->comment('彩种中文名');
			$table->boolean('status')->nullable()->default(0)->comment('开启状态：0关闭 1开启');
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
		Schema::drop('frontend_lottery_notice_lists');
	}

}
