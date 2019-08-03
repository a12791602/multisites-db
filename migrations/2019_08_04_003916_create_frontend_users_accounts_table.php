<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendUsersAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frontend_users_accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->comment('用户id （frontend_users表id）');
			$table->decimal('balance', 18, 4)->unsigned()->default(0.0000)->comment('资金');
			$table->decimal('frozen', 18, 4)->unsigned()->default(0.0000)->comment('冻结资金');
			$table->boolean('status')->default(0)->comment('状态 0关闭 1开启');
			$table->timestamps();
			$table->index(['user_id','balance'], 'user_accounts_user_id_balance_index');
			$table->index(['user_id','frozen'], 'user_accounts_user_id_frozen_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frontend_users_accounts');
	}

}
