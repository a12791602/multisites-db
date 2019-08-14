<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersWithdrawHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_withdraw_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('top_id')->comment('（frontend_users表top_id）');
			$table->integer('parent_id')->comment('（frontend_users表parent_id）');
			$table->integer('user_id')->comment('用户id（frontend_users表id）');
			$table->string('username', 64)->comment('用户名 （frontend_users表username）');
			$table->string('rid', 128)->comment('（frontend_users表rid）');
			$table->string('order_id', 64)->default('')->comment('订单号');
			$table->integer('card_id')->comment('用户银行卡表id（frontend_users_bank_cards表id）');
			$table->string('bank_sign', 32)->default('0');
			$table->bigInteger('amount')->unsigned()->default(0)->comment('提现金额');
			$table->bigInteger('real_amount')->unsigned()->default(0)->comment('实际金额');
			$table->integer('request_time')->default(0);
			$table->integer('expire_time')->default(0);
			$table->integer('process_time')->default(0)->comment('处理时间');
			$table->integer('process_day')->default(0)->comment('处理日期');
			$table->string('source', 32)->default('web');
			$table->string('client_ip', 20)->default('')->comment('ip');
			$table->string('description')->default('')->comment('描述');
			$table->text('desc', 65535);
			$table->boolean('status')->default(0);
			$table->integer('admin_id')->default(0)->comment('管理员id （backend_admin_users表id）');
			$table->timestamps();
			$table->index(['user_id','process_time'], 'user_withdraw_user_id_process_time_index');
			$table->index(['user_id','request_time'], 'user_withdraw_user_id_request_time_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_withdraw_histories');
	}

}
