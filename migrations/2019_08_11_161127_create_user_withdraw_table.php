<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWithdrawTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_withdraw', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('top_id');
			$table->integer('parent_id');
			$table->integer('user_id');
			$table->string('username', 64);
			$table->string('nickname', 64);
			$table->string('order_id', 64)->default('')->index();
			$table->integer('card_id');
			$table->string('bank_sign', 32)->default('0');
			$table->bigInteger('amount')->unsigned()->default(0);
			$table->bigInteger('real_amount')->unsigned()->default(0);
			$table->integer('request_time')->default(0);
			$table->integer('check_time')->default(0);
			$table->integer('process_time')->default(0);
			$table->integer('process_day')->default(0);
			$table->integer('stat_time')->default(0);
			$table->string('source', 32)->default('web');
			$table->string('client_ip', 20)->default('');
			$table->string('description')->default('');
			$table->boolean('status')->default(0);
			$table->integer('check_admin_id')->default(0);
			$table->integer('hand_admin_id')->default(0);
			$table->timestamps();
			$table->index(['top_id','status']);
			$table->index(['top_id','user_id','request_time']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_withdraw');
	}

}
