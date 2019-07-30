<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryIssueRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_issue_rules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lottery_id')->comment('彩票id （lottery_lists表id）');
			$table->string('lottery_name')->comment('彩票名（lottery_lists表cn_name）');
			$table->time('begin_time')->comment('开始时间');
			$table->time('end_time')->comment('结束时间');
			$table->integer('issue_seconds')->comment('奖期间隔时间（秒）');
			$table->time('first_time')->comment('第一期时间');
			$table->smallInteger('adjust_time');
			$table->smallInteger('encode_time');
			$table->smallInteger('issue_count');
			$table->boolean('status')->default(1)->comment('状态 0关闭 1开启');
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
		Schema::drop('lottery_issue_rules');
	}

}
