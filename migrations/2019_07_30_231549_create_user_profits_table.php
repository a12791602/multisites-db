<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserProfitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profits', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->date('date')->index('date');
			$table->integer('user_id')->unsigned();
			$table->boolean('is_tester')->nullable();
			$table->string('username', 16);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->decimal('team_deposit', 16, 4)->unsigned()->nullable()->default(0.0000)->comment('充值总额');
			$table->decimal('team_withdrawal', 16, 4)->unsigned()->nullable()->default(0.0000)->comment('提现总额');
			$table->decimal('team_turnover', 16, 4)->unsigned()->nullable()->default(0.0000)->comment('投注总额');
			$table->decimal('team_prize', 18, 6)->unsigned()->nullable()->default(0.000000)->comment('派奖总额');
			$table->decimal('team_profit', 18, 6)->nullable()->default(0.000000)->comment('游戏盈亏');
			$table->decimal('team_commission', 16, 6)->unsigned()->nullable()->default(0.000000)->comment('下级返点');
			$table->decimal('team_bet_commission', 16, 6)->unsigned()->nullable()->default(0.000000)->comment('投注返点');
			$table->decimal('team_dividend', 16, 4)->unsigned()->nullable()->default(0.0000)->comment('促销红利');
			$table->decimal('team_daily_salary', 16, 4)->nullable()->default(0.0000)->comment('日工资');
			$table->timestamps();
			$table->unique(['user_id','date'], 'userid_date');
			$table->unique(['username','date'], 'username_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profits');
	}

}
