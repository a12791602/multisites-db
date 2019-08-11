<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersStatDaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_stat_days', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('top_id');
			$table->integer('parent_id');
			$table->integer('user_id');
			$table->string('username', 32);
			$table->string('lottery_id', 32);
			$table->string('method_id', 32);
			$table->bigInteger('recharge_amount')->unsigned()->default(0);
			$table->integer('recharge_count')->default(0);
			$table->integer('recharge_first')->default(0);
			$table->bigInteger('withdraw_amount')->unsigned()->default(0);
			$table->integer('withdraw_count')->default(0);
			$table->bigInteger('system_transfer_in')->unsigned()->default(0);
			$table->bigInteger('system_transfer_out')->unsigned()->default(0);
			$table->bigInteger('parent_transfer_in')->unsigned()->default(0);
			$table->bigInteger('salary')->unsigned()->default(0);
			$table->bigInteger('dividend')->unsigned()->default(0);
			$table->bigInteger('gift')->unsigned()->default(0);
			$table->bigInteger('bets')->unsigned()->default(0);
			$table->bigInteger('self_points')->unsigned()->default(0);
			$table->bigInteger('child_points')->unsigned()->default(0);
			$table->bigInteger('bonus')->unsigned()->default(0);
			$table->bigInteger('canceled')->unsigned()->default(0);
			$table->bigInteger('team_recharge_amount')->unsigned()->default(0);
			$table->bigInteger('team_recharge_count')->unsigned()->default(0);
			$table->bigInteger('team_withdraw_amount')->unsigned()->default(0);
			$table->bigInteger('team_withdraw_count')->unsigned()->default(0);
			$table->bigInteger('team_system_transfer_in')->unsigned()->default(0);
			$table->bigInteger('team_system_transfer_out')->unsigned()->default(0);
			$table->bigInteger('team_parent_transfer_in')->unsigned()->default(0);
			$table->bigInteger('team_salary')->unsigned()->default(0);
			$table->bigInteger('team_dividend')->unsigned()->default(0);
			$table->bigInteger('team_gift')->unsigned()->default(0);
			$table->bigInteger('team_bets')->unsigned()->default(0);
			$table->bigInteger('team_self_points')->unsigned()->default(0);
			$table->bigInteger('team_child_points')->unsigned()->default(0);
			$table->bigInteger('team_bonus')->unsigned()->default(0);
			$table->bigInteger('team_canceled')->unsigned()->default(0);
			$table->integer('day');
			$table->timestamps();
			$table->index(['top_id','day'], 'top_day_index');
			$table->index(['top_id','user_id','day'], 'top_user_id_day_index');
			$table->index(['top_id','parent_id','day'], 'top_parent_day_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_stat_days');
	}

}
