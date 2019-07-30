<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('serial_number', 64)->nullable()->comment('投注订单号码');
			$table->integer('user_id');
			$table->string('username', 64)->default('');
			$table->integer('top_id')->index();
			$table->string('rid', 256)->default('');
			$table->integer('parent_id');
			$table->boolean('is_tester')->default(0);
			$table->string('series_id', 32)->comment('彩种系列标识');
			$table->integer('basic_method_id')->nullable()->comment('lottery_basic_methods表id');
			$table->string('lottery_sign', 32)->comment('彩种标识');
			$table->string('method_sign', 32)->comment('玩法标识');
			$table->string('method_group', 32)->comment('玩法组');
			$table->string('method_name', 32)->comment('玩法中文名');
			$table->integer('user_prize_group')->comment('用户奖金组');
			$table->integer('bet_prize_group')->comment('彩票奖金组');
			$table->integer('trace_id')->default(0);
			$table->integer('level')->nullable();
			$table->decimal('mode', 15, 4)->comment('模式 （元：1.0000   角：0.1000   分0.0100）');
			$table->integer('times')->unsigned()->comment('倍数');
			$table->decimal('price', 15, 4);
			$table->decimal('total_cost', 15, 4)->default(0.0000);
			$table->string('issue', 32)->comment('奖期号');
			$table->text('bet_number', 65535)->comment('下注的号码');
			$table->string('open_number', 64)->default('')->comment('开奖的号码');
			$table->string('winning_number', 60)->nullable()->comment('中奖号码');
			$table->string('prize_set', 64);
			$table->boolean('is_win')->default(0)->comment('是否中奖  （0否 1是）');
			$table->decimal('bonus', 15, 4)->default(0.0000)->comment('中奖金额');
			$table->decimal('point', 15, 4)->default(0.0000);
			$table->char('ip', 15);
			$table->string('proxy_ip', 200);
			$table->boolean('bet_from')->default(1);
			$table->boolean('status')->default(0)->comment('0已投注 1已撤销 2未中奖 3已中奖 4已派奖');
			$table->boolean('status_input')->default(0);
			$table->boolean('status_count')->default(0);
			$table->boolean('status_prize')->default(0);
			$table->boolean('status_point')->default(0);
			$table->boolean('status_trace')->default(0);
			$table->boolean('status_stat')->default(0);
			$table->integer('time_bought')->default(0);
			$table->integer('time_input')->default(0);
			$table->integer('time_count')->default(0);
			$table->integer('time_prize')->default(0)->comment('派奖时间');
			$table->integer('time_point')->default(0);
			$table->integer('time_trace')->default(0);
			$table->integer('time_cancel')->default(0);
			$table->integer('time_stat')->default(0);
			$table->timestamps();
			$table->index(['user_id','lottery_sign','time_bought']);
			$table->index(['lottery_sign','time_bought']);
			$table->index(['issue','user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
