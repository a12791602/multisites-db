<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotteryTracesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_traces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('top_id')->index('traces_top_id_index');
			$table->integer('parent_id')->index('traces_parent_id_index');
			$table->string('rid', 256)->default('')->index('traces_rid_index');
			$table->string('username', 64)->default('');
			$table->boolean('is_tester')->default(0);
			$table->string('series_id', 32)->comment('彩种系列标识');
			$table->string('lottery_sign', 32)->comment('彩种标识');
			$table->string('method_sign', 32)->index('traces_method_sign_index')->comment('玩法标识');
			$table->string('method_group', 32)->comment('玩法组');
			$table->string('method_name', 32)->index('traces_method_name_index')->comment('玩法中文名');
			$table->text('bet_number')->comment('下注号码');
			$table->integer('times')->default(1)->comment('倍数');
			$table->decimal('single_price', 15, 4)->comment('单注金额');
			$table->decimal('total_price', 15, 4)->comment('下注总金额');
			$table->boolean('win_stop')->default(0)->comment('中奖后停止追号 （0否 1是）');
			$table->decimal('mode', 15, 4)->default(1.0000)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
			$table->integer('user_prize_group')->comment('用户奖金组');
			$table->integer('bet_prize_group')->comment('彩种奖金组');
			$table->integer('total_issues');
			$table->integer('finished_issues')->default(0);
			$table->integer('canceled_issues')->default(0);
			$table->integer('finished_amount')->default(0);
			$table->decimal('finished_bonus', 18, 4)->nullable();
			$table->integer('canceled_amount')->default(0);
			$table->string('start_issue', 16)->comment('开始追号的奖期');
			$table->string('now_issue', 16)->comment('现在追号的奖期');
			$table->string('end_issue', 16)->comment('结束追号的奖期');
			$table->string('stop_issue', 16)->comment('停止追号的奖期');
			$table->text('issue_process', 65535)->comment('追号详情');
			$table->integer('add_time')->comment('开始时间');
			$table->integer('stop_time')->comment('结束时间');
			$table->char('ip', 15);
			$table->string('proxy_ip', 200);
			$table->boolean('bet_from')->default(1);
			$table->boolean('status')->default(0)->comment('0 正在追号  1追号完成   2中奖停止  4系统撤销  5玩家撤销');
			$table->boolean('finished_status')->default(0);
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
		Schema::drop('lottery_traces');
	}

}
