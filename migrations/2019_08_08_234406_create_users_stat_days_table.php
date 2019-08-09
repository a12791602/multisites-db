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
		Schema::create('users_stat_day', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('top_id');
			$table->integer('parent_id');
			$table->integer('user_id');

			$table->string('username', 32);
			$table->string('lottery_id', 32);
			$table->string('method_id', 32);

            $table->unsignedBigInteger('recharge_amount')->default(0);
            $table->integer('recharge_count')->default(0);
            $table->integer('recharge_first')->default(0);

            $table->unsignedBigInteger('withdraw_amount')->default(0);
            $table->integer('withdraw_count')->default(0);

            $table->unsignedBigInteger('system_transfer_in')->default(0);
            $table->unsignedBigInteger('system_transfer_out')->default(0);
            $table->unsignedBigInteger('parent_transfer_in')->default(0);

            $table->unsignedBigInteger('salary')->default(0);
            $table->unsignedBigInteger('dividend')->default(0);
            $table->unsignedBigInteger('gift')->default(0);

			$table->unsignedBigInteger('bets')->default(0);
			$table->unsignedBigInteger('self_points')->default(0);
            $table->unsignedBigInteger('child_points')->default(0);
			$table->unsignedBigInteger('bonus')->default(0);
			$table->unsignedBigInteger('canceled')->default(0);

			$table->unsignedBigInteger('team_recharge_amount')->default(0);
			$table->unsignedBigInteger('team_recharge_count')->default(0);
			$table->unsignedBigInteger('team_withdraw_amount')->default(0);
			$table->unsignedBigInteger('team_withdraw_count')->default(0);
            $table->unsignedBigInteger('team_system_transfer_in')->default(0);
            $table->unsignedBigInteger('team_system_transfer_out')->default(0);
            $table->unsignedBigInteger('team_parent_transfer_in')->default(0);

            $table->unsignedBigInteger('team_salary')->default(0);
            $table->unsignedBigInteger('team_dividend')->default(0);
            $table->unsignedBigInteger('team_gift')->default(0);

            $table->unsignedBigInteger('team_bets')->default(0);
            $table->unsignedBigInteger('team_self_points')->default(0);
            $table->unsignedBigInteger('team_child_points')->default(0);
            $table->unsignedBigInteger('team_bonus')->default(0);
            $table->unsignedBigInteger('team_canceled')->default(0);

			$table->integer('day');
			$table->timestamps();

			$table->index(['top_id','parent_id','day'], 'top_parent_day_index');
			$table->index(['top_id','day'], 'top_day_index');
			$table->index(['top_id','user_id','day'], 'top_user_id_day_index');
		});

        Schema::create('users_stat', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('top_id');
            $table->integer('parent_id');
            $table->integer('user_id');

            $table->string('username', 32);
            $table->string('lottery_id', 32);
            $table->string('method_id', 32);

            $table->unsignedBigInteger('recharge_amount')->default(0);
            $table->integer('recharge_count')->default(0);

            $table->unsignedBigInteger('withdraw_amount')->default(0);
            $table->integer('withdraw_count')->default(0);

            $table->unsignedBigInteger('system_transfer_in')->default(0);
            $table->unsignedBigInteger('system_transfer_out')->default(0);
            $table->unsignedBigInteger('parent_transfer_in')->default(0);

            $table->unsignedBigInteger('salary')->default(0);
            $table->unsignedBigInteger('dividend')->default(0);
            $table->unsignedBigInteger('gift')->default(0);

            $table->unsignedBigInteger('bets')->default(0);
            $table->unsignedBigInteger('self_points')->default(0);
            $table->unsignedBigInteger('child_points')->default(0);
            $table->unsignedBigInteger('bonus')->default(0);
            $table->unsignedBigInteger('canceled')->default(0);

            $table->unsignedBigInteger('team_recharge_amount')->default(0);
            $table->unsignedBigInteger('team_recharge_count')->default(0);
            $table->unsignedBigInteger('team_withdraw_amount')->default(0);
            $table->unsignedBigInteger('team_withdraw_count')->default(0);
            $table->unsignedBigInteger('team_system_transfer_in')->default(0);
            $table->unsignedBigInteger('team_system_transfer_out')->default(0);
            $table->unsignedBigInteger('team_parent_transfer_in')->default(0);

            $table->unsignedBigInteger('team_salary')->default(0);
            $table->unsignedBigInteger('team_dividend')->default(0);
            $table->unsignedBigInteger('team_gift')->default(0);

            $table->unsignedBigInteger('team_bets')->default(0);
            $table->unsignedBigInteger('team_self_points')->default(0);
            $table->unsignedBigInteger('team_child_points')->default(0);
            $table->unsignedBigInteger('team_bonus')->default(0);
            $table->unsignedBigInteger('team_canceled')->default(0);

            $table->timestamps();

            $table->index(['top_id','parent_id'], 'top_parent_index');
            $table->index(['top_id'], 'top_index');
            $table->index(['top_id','user_id'], 'top_user_id_index');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_stat_day');
        Schema::drop('users_stat');
	}

}
